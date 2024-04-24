@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <section class="bg-white dark:bg-gray-800">
        <div class="container mx-auto flex justify-center">

            @include('frontend.includes.messages')

        </div>
        <div class="container mx-auto max-w-7xl px-4 py-10 sm:px-6">
            <div class="mb-10 sm:grid sm:grid-cols-3 sm:gap-6">
                <div class="sm:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-800 dark:text-gray-200">Kontaktiere uns</h3>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            Bitte hinterlasse deine Kontaktdaten und einen Hinweis worum es geht.
                        </p>
                    </div>
                </div>
                <div class="mt-5 sm:col-span-2 sm:mt-0">
                    <div class="mb-8 rounded-lg border bg-white p-6 shadow-lg dark:bg-gray-100">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label class="block-inline text-sm font-medium text-gray-700" for="email">Email</label>
                                <span class="text-danger text-red-600">*</span>
                                <input
                                    class="mt-1 w-full rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 placeholder-gray-300 shadow-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600"
                                    id="email" type="email">
                            </div>
                            <div class="col-span-6">
                                <label class="block-inline text-sm font-medium text-gray-700" for="name">Name</label>
                                <span class="text-danger text-red-600">*</span>
                                <input
                                    class="mt-1 w-full rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 placeholder-gray-300 shadow-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600"
                                    id="name" type="text">
                            </div>
                            <div class="col-span-6">
                                <label class="block-inline text-sm font-medium text-gray-700" for="phone">Phone</label>
                                <span class="text-danger text-red-600">*</span>
                                <input
                                    class="mt-1 w-full rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 placeholder-gray-300 shadow-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600"
                                    id="phone" type="text">
                            </div>
                            <div class="col-span-6">
                                <label class="block-inline text-sm font-medium text-gray-700" for="message">Nachricht</label>
                                <span class="text-danger text-red-600">*</span>
                                <input
                                    class="mt-1 w-full rounded border border-gray-300 bg-gray-200 px-4 py-2 text-gray-700 placeholder-gray-300 shadow-sm focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-600"
                                    id="message" type="text">
                            </div>
                        </div>
                        <div class="mt-4 bg-gray-50 px-4 text-end sm:px-6">
                            <button
                                class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                                type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
