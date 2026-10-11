<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            [
                'reviewer_name' => 'Hasna Kp',
                'rating' => 5,
                'review_text' => 'We are extremely happy with the therapy services provide by gems clinic. We have seen a remarkable improvement in our child over time. He has started trying to speak, his hyperactivity has reduced significantly, and his eye contact with people has improved a lot',
                'review_date' => '2024-08-12',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'reviewer_name' => 'Fathima va.',
                'rating' => 5,
                'review_text' => 'One of the best child development centres in Calicut! Only after reaching here did I truly feel that my son has received the right guidance and support. The staff are very professional, caring, and patient.',
                'review_date' => '2024-11-04',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'reviewer_name' => 'Aneesh meladath.',
                'rating' => 5,
                'review_text' => 'The best therapy centre for developmental delayed kids. Excellent teaching and skill development methods using Kids are very happy because of friendly atmosphere.',
                'review_date' => '2025-01-15',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'reviewer_name' => 'Rahul K.',
                'rating' => 5,
                'review_text' => "Truly grateful for the progress we've seen. The staff is like family. They've supported us as much as they've supported our son. Excellent environment.",
                'review_date' => '2025-02-28',
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($reviews as $review) {
            Review::firstOrCreate(
                ['reviewer_name' => $review['reviewer_name']],
                $review
            );
        }
    }
}
