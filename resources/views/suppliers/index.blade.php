@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Supplier Management</h1>

        <div class="flex gap-2">
            <a href="{{ route('suppliers.print') }}" target="_blank"
               class="px-4 py-2 bg-slate-200 rounded hover:bg-slate-300 transition">
                Print List
            </a>

            <a href="{{ route('suppliers.create') }}"
               class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
                + Add Supplier
            </a>
        </div>
    </div>

    <!-- Filter Form -->
    <form action="{{ route('suppliers.index') }}" method="GET"
          class="mb-6 flex flex-wrap items-end gap-4">

        <!-- Search -->
        <div class="flex-1 min-w-[250px]">
            <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">
                Search
            </label>
            <input type="text"
                   name="search"
                   value="{{ request('search') }}"
                   placeholder="Name, email or phone..."
                   class="w-full border border-slate-300 p-2.5 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none shadow-sm">
        </div>

        <!-- Sort -->
        <div class="w-full md:w-48">
            <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">
                Sort By
            </label>
            <select name="sort"
                    class="w-full border border-slate-300 p-2.5 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 outline-none shadow-sm cursor-pointer">
                <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>
                    Newest Added
                </option>
                <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>
                    Name (A-Z)
                </option>
                <option value="email" {{ request('sort') == 'email' ? 'selected' : '' }}>
                    Email
                </option>
            </select>
        </div>

        <!-- Direction -->
        <div class="w-full md:w-32">
            <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">
                Order
            </label>
            <select name="direction"
                    class="w-full border border-slate-300 p-2.5 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 outline-none shadow-sm cursor-pointer">
                <option value="desc" {{ request('direction') == 'desc' ? 'selected' : '' }}>
                    Descending
                </option>
                <option value="asc" {{ request('direction') == 'asc' ? 'selected' : '' }}>
                    Ascending
                </option>
            </select>
        </div>

        <!-- Buttons -->
        <div class="flex gap-2">
            <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-2.5 rounded-lg hover:bg-indigo-700 transition font-medium shadow-sm">
                Apply
            </button>

            @if(request()->hasAny(['search','sort','direction']))
                <a href="{{ route('suppliers.index') }}"
                   class="bg-slate-100 text-slate-600 px-4 py-2.5 rounded-lg hover:bg-slate-200 transition">
                    Reset
                </a>
            @endif
        </div>
    </form>

    <!-- Result Info -->
    @if(request('search'))
        <p class="text-sm text-slate-500 mb-4">
            Found <strong>{{ $suppliers->total() }}</strong>
            result(s) for "{{ request('search') }}"
        </p>
    @endif

    <!-- Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">

        <table class="w-full text-left">
            <thead class="bg-slate-100 border-b">
                <tr>
                    <th class="p-4">Name</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Phone</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($suppliers as $supplier)
                    <tr class="border-b hover:bg-slate-50 transition">
                        <td class="p-4 font-medium text-slate-700">{{ $supplier->name }}</td>
                        <td class="p-4 text-slate-600">{{ $supplier->email }}</td>
                        <td class="p-4 text-slate-600">{{ $supplier->phone }}</td>

                        <td class="p-4 text-right flex justify-end gap-3">
                            <a href="{{ route('suppliers.edit', $supplier) }}"
                               class="text-indigo-600 hover:text-indigo-900 font-medium">
                                Edit
                            </a>

                            <form action="{{ route('suppliers.destroy', $supplier) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this supplier?')">
                                @csrf
                                @method('DELETE')

                                <button class="text-red-500 hover:text-red-700 font-medium">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-12 text-center">
                            <div class="flex flex-col items-center">
                                <p class="text-slate-500 text-lg font-medium">
                                    No suppliers match your search.
                                </p>

                                <a href="{{ route('suppliers.index') }}"
                                   class="mt-2 text-indigo-600 hover:underline">
                                    View all suppliers
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- ✅ IMPROVED PAGINATION UI -->
        <div class="p-4 border-t border-slate-100 bg-slate-50">
            {{ $suppliers->links() }}
        </div>

    </div>

</div>

@endsection