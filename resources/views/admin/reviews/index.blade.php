@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-8">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Google Reviews</h2>
        <a href="{{ route('admin.reviews.create') }}"
           class="px-5 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition-colors">
            + Add Review
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">#</th>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Reviewer</th>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Rating</th>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Review</th>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Date</th>
                    <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Status</th>
                    <th class="text-right px-6 py-3 text-sm font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($reviews as $review)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $review->sort_order }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-teal-600 flex items-center justify-center text-white font-bold text-sm">
                                {{ $review->initial }}
                            </div>
                            <span class="font-medium text-gray-900">{{ $review->reviewer_name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-0.5">
                            @for($i = 0; $i < $review->rating; $i++)
                                <svg viewBox="0 0 24 24" fill="#FBBC04" class="w-4 h-4"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                            @endfor
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate">{{ Str::limit($review->review_text, 60) }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $review->review_date->format('d M Y') }}</td>
                    <td class="px-6 py-4">
                        @if($review->is_active)
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
                        @else
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-500">Hidden</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.reviews.edit', $review) }}"
                               class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">Edit</a>
                            <form method="POST" action="{{ route('admin.reviews.destroy', $review) }}" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Delete this review?')"
                                        class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-12 text-center text-gray-400">No reviews yet. Add your first one!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
