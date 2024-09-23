<x-app-layout>
    <div class="flex">
        <div class="w-[1200px] relative flex items-start mx-auto p-4 py-6 lg:py-8 gap-8">
            @include('layouts.sidebar')
            <!-- Main Content -->
            <div class="w-full lg:w-5/6 h-screen">
                <div class="space-y-6">
                    <div class="text-2xl font-semibold">Add Teacher</div>

                    <!-- Search Email -->
                    <div class="bg-white rounded-lg p-6 shadow-lg">
                        {{-- <input class="rounded-full border border-slate-300 w-full px-4 py-2" aria-autocomplete="both"
                            aria-labelledby="" id="" autocomplete="off" autocorrect="off" autocapitalize="off"
                            enterkeyhint="go" spellcheck="false" maxlength="64" type="search"
                            placeholder="Search email..." aria-activedescendant="" aria-controls=""> --}}
                        <div x-data="studentEmailSearch()" x-init="initSelectize" class="flex flex-col space-y-4">
                            <div class="flex space-x-2">
                                <select id="student-email-select"
                                    class="rounded-lg border border-slate-300 w-full px-4 py-2"
                                    placeholder="Search for student email..."></select>
                                <button @click="addEmail"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg inline-flex items-center transition duration-300 ease-in-out">
                                    Add
                                </button>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="email in selectedEmails" :key="email">
                                    <div class="flex items-center bg-gray-100 rounded-full px-3 py-1">
                                        <span x-text="email" class="text-sm"></span>
                                        <button @click="removeEmail(email)"
                                            class="ml-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </template>
                            </div>
                        </div>
                        {{-- @push('scripts')
                            <script>
                                function studentEmailSearch() {
                                    return {
                                        selectizeInstance: null,
                                        selectedEmails: [],
                                        initSelectize() {
                                            this.selectizeInstance = $('#student-email-select').selectize({
                                                valueField: 'email',
                                                labelField: 'email',
                                                searchField: 'email',
                                                create: false,
                                                load: function(query, callback) {
                                                    if (!query.length) return callback();
                                                    $.ajax({
                                                        url: '{{ route('search.students') }}',
                                                        type: 'GET',
                                                        dataType: 'json',
                                                        data: {
                                                            query: query
                                                        },
                                                        error: function() {
                                                            callback();
                                                        },
                                                        success: function(res) {
                                                            callback(res);
                                                        }
                                                    });
                                                }
                                            })[0].selectize;
                                        },
                                        addEmail() {
                                            const selectedEmail = this.selectizeInstance.getValue();
                                            if (selectedEmail && !this.selectedEmails.includes(selectedEmail)) {
                                                this.selectedEmails.push(selectedEmail);
                                                this.selectizeInstance.clear();
                                            }
                                        },
                                        removeEmail(email) {
                                            this.selectedEmails = this.selectedEmails.filter(e => e !== email);
                                        }
                                    }
                                }
                            </script>
                        @endpush --}}
                    </div>

                    <div class="text-xl">Teachers</div>
                    <div class="">
                        <table id="example" class="display" style="width:100%">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Account</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Example row, repeat as needed -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40"
                                                    alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">John Doe</div>
                                                <div class="text-sm text-gray-500">john@example.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">2023-09-20</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center space-x-2">
                                        <button
                                            class="text-blue-500 hover:text-white font-semibold bg-white hover:bg-blue-500 border border-blue-500 rounded px-2 py-1 transition duration-300 ease-in-out">View</button>
                                        <button
                                            class="text-yellow-500 hover:text-white font-semibold bg-white hover:bg-yellow-500 border border-yellow-500 rounded px-2 py-1 transition duration-300 ease-in-out">Edit</button>
                                        <button
                                            class="text-red-500 hover:text-white font-semibold bg-white hover:bg-red-500 border border-red-500 rounded px-2 py-1 transition duration-300 ease-in-out">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40"
                                                    alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Pnhn Doe</div>
                                                <div class="text-sm text-gray-500">john@example.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">2023-09-20</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-center space-x-2">
                                        <button
                                            class="text-blue-500 hover:text-white font-semibold bg-white hover:bg-blue-500 border border-blue-500 rounded px-2 py-1 transition duration-300 ease-in-out">View</button>
                                        <button
                                            class="text-yellow-500 hover:text-white font-semibold bg-white hover:bg-yellow-500 border border-yellow-500 rounded px-2 py-1 transition duration-300 ease-in-out">Edit</button>
                                        <button
                                            class="text-red-500 hover:text-white font-semibold bg-white hover:bg-red-500 border border-red-500 rounded px-2 py-1 transition duration-300 ease-in-out">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
