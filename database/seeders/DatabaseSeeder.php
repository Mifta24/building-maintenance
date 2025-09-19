<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;
// use App\UserRole;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Users
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'John Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin12345'),
            // 'role' => UserRole::ADMIN,
        ]);

        // Articles
        Article::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?technology',
            'headline' => '舞台裏: KS設備が社内サービスをどのように運営しているか',
            'lead' => '社内サービスモデルの利点と、私たちの安全と品質へのコミットメントを発見してください。',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.',
        ]);

        Article::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?building',
            'headline' => 'ZEBとは何ですか？カーボンニュートラル建築の未来を築く',
            'lead' => 'ZEBの紹介とその建物運営への影響を減少させる方法について',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.',
        ]);

        Article::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?maintenance',
            'headline' => 'スマートメンテナンスによるライフサイクルコストの削減',
            'lead' => '定期的で効率的なメンテナンスが建物の運営における長期的なコスト削減にどのように寄与するかを学びましょう。',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.',
        ]);
    }
}
