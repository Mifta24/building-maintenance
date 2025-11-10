<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Service;
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
        // Clear existing data
        User::truncate();
        Article::truncate();
        Service::truncate();

        // Users
        User::create([
            'name' => 'John Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin12345'),
            'role' => 'admin',
        ]);

        // Articles
        Article::create([
            'image' => '',
            'headline' => '舞台裏: KS設備が社内サービスをどのように運営しているか',
            'lead' => '社内サービスモデルの利点と、私たちの安全と品質へのコミットメントを発見してください。',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.',
        ]);

        Article::create([
            'image' => '',
            'headline' => 'ZEBとは何ですか？カーボンニュートラル建築の未来を築く',
            'lead' => 'ZEBの紹介とその建物運営への影響を減少させる方法について',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.',
        ]);

        Article::create([
            'image' => '',
            'headline' => 'スマートメンテナンスによるライフサイクルコストの削減',
            'lead' => '定期的で効率的なメンテナンスが建物の運営における長期的なコスト削減にどのように寄与するかを学びましょう。',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.',
        ]);

        // Services
        Service::create([
            'image' => '',
            'name' => '緊急時対応能力',
            'description' => '万が一の設備トラブル発生時にも、資格保有者が迅速かつ的確な判断を下し、被害を最小限に抑えます。',
        ]);

        Service::create([
            'image' => '',
            'name' => '高度な技術力',
            'description' => '特定のメーカー製最新鋭設備など、特殊な知識を要する機器のメンテナンスにも対応可能です。',
        ]);

        Service::create([
            'image' => '',
            'name' => '法的基準の完全遵守',
            'description' => '最新の建築基準法や消防法に精通し、お客様のビルが常に安全で適法な状態であることを保証します。',
        ]);

        Service::create([
            'image' => '',
            'name' => '日本でごく限られた専門家だけの特殊資格',
            'description' => '当社の技術者は、ビル設備管理の最高峰とも言える国家資格やメーカー認定資格を保有しています。これにより、他の管理会社では対応できない複雑な設備の点検・保守も、法令を遵守し、最高の品質でご提供することが可能です。',
        ]);

        Service::create([
            'image' => '',
            'name' => 'お問い合わせ',
            'description' => 'お問い合わせ・ご相談・ご質問など、お気軽にご連絡ください。',
        ]);
    }
}
