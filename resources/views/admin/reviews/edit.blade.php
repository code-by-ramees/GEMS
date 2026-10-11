@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Edit Review</h2>

    @if(isset($errors) && $errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
            <ul class="list-disc list-inside">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.reviews.update', $review) }}" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Reviewer Name *</label>
            <input type="text" name="reviewer_name" value="{{ old('reviewer_name', $review->reviewer_name) }}" required
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Rating *</label>
            <select name="rating" class="w-full border rounded-lg px-4 py-2">
                @for($r = 5; $r >= 1; $r--)
                    <option value="{{ $r }}" {{ old('rating', $review->rating) == $r ? 'selected' : '' }}>{{ str_repeat('⭐', $r) }} ({{ $r }})</option>
                @endfor
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Review Text *</label>
            <textarea name="review_text" rows="4" required
                      class="w-full border rounded-lg px-4 py-2">{{ old('review_text', $review->review_text) }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Review Date *</label>
            <input type="date" name="review_date" value="{{ old('review_date', $review->review_date->format('Y-m-d')) }}" required
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $review->sort_order) }}" min="0"
                   class="w-full border rounded-lg px-4 py-2">
        </div>

        <div class="flex items-center gap-2">
            <input type="checkbox" name="is_active" value="1" id="is_active" {{ old('is_active', $review->is_active) ? 'checked' : '' }}
                   class="rounded border-gray-300">
            <label for="is_active" class="text-sm text-gray-700">Show on homepage</label>
        </div>

        <div class="flex gap-4">
            <button class="px-6 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700">Update Review</button>
            <a href="{{ route('admin.reviews.index') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-50">Cancel</a>
        </div>
    </form>
</div>
@endsection
