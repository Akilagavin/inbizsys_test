@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('suppliers.index') }}" class="text-sm text-slate-500 hover:text-indigo-600">← Cancel</a>
        <h1 class="text-2xl font-bold mt-2">Edit Supplier: {{ $supplier->name }}</h1>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200">
        <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-slate-700">Full Name</label>
                    <input type="text" name="name" value="{{ old('name', $supplier->name) }}" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700">Email Address</label>
                    <input type="email" name="email" value="{{ old('email', $supplier->email) }}" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700">Phone Number</label>
                    <input type="text" name="phone" value="{{ old('phone', $supplier->phone) }}" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700">Business Address</label>
                    <textarea name="address" rows="3" class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('address', $supplier->address) }}</textarea>
                </div>
            </div>

            <div class="mt-8">
                <button type="submit" class="w-full bg-slate-900 text-white py-2 px-4 rounded-md hover:bg-slate-800 transition font-semibold">
                    Update Record
                </button>
            </div>
        </form>
    </div>
</div>
@endsection