<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 font-sans antialiased">
    <div class="min-h-screen flex items-center justify-center py-10">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-6" x-data="todoApp()">
            <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">TODO List</h1>

            <form @submit.prevent="addTask" class="flex gap-2 mb-6">
                <input type="text" x-model="newTask" placeholder="Add a new task..."
                    class="flex-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                    Add
                </button>
            </form>

            <ul class="space-y-3">
                <template x-for="task in tasks" :key="task.id">
                    <li class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border border-gray-100 shadow-sm transition hover:shadow-md"
                        :class="{'opacity-50': task.completed}">
                        <div class="flex items-center gap-3">
                            <input type="checkbox" x-model="task.completed" @change="toggleTask(task)"
                                class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500 cursor-pointer">
                            <span x-text="task.title" :class="{'line-through text-gray-500': task.completed}"
                                class="text-lg font-medium break-all"></span>
                        </div>
                        <button @click="deleteTask(task.id)"
                            class="text-red-500 hover:text-red-700 p-1 rounded-md transition focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </li>
                </template>
            </ul>
            <div x-show="tasks.length === 0" class="text-center text-gray-500 mt-6" style="display: none;">
                No tasks yet. Add one above!
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('todoApp', () => ({
                tasks: [],
                newTask: '',
                init() {
                    this.fetchTasks();
                },
                async fetchTasks() {
                    try {
                        const response = await fetch('/tasks');
                        this.tasks = await response.json();
                    } catch (error) {
                        console.error('Error fetching tasks:', error);
                    }
                },
                async addTask() {
                    if (!this.newTask.trim()) return;
                    try {
                        const response = await fetch('/tasks', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ title: this.newTask })
                        });
                        if (response.ok) {
                            const task = await response.json();
                            this.tasks.unshift(task);
                            this.newTask = '';
                        }
                    } catch (error) {
                        console.error('Error adding task:', error);
                    }
                },
                async toggleTask(task) {
                    try {
                        await fetch(`/tasks/${task.id}`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ completed: task.completed })
                        });
                    } catch (error) {
                        console.error('Error toggling task:', error);
                        task.completed = !task.completed;
                    }
                },
                async deleteTask(id) {
                    try {
                        const response = await fetch(`/tasks/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        });
                        if (response.ok) {
                            this.tasks = this.tasks.filter(t => t.id !== id);
                        }
                    } catch (error) {
                        console.error('Error deleting task:', error);
                    }
                }
            }))
        })
    </script>
</body>

</html>