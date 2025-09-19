<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Partner;
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

        // Services
        Service::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?consulting',
            'name' => '緊急時対応能力',
            'description' => '万が一の設備トラブル発生時にも、資格保有者が迅速かつ的確な判断を下し、被害を最小限に抑えます。',
        ]);
        
        Service::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?consulting',
            'name' => '高度な技術力',
            'description' => '特定のメーカー製最新鋭設備など、特殊な知識を要する機器のメンテナンスにも対応可能です。',
        ]);

        Service::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?consulting',
            'name' => '法的基準の完全遵守',
            'description' => '最新の建築基準法や消防法に精通し、お客様のビルが常に安全で適法な状態であることを保証します。',
        ]);

        Service::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?consulting',
            'name' => '日本でごく限られた専門家だけの特殊資格',
            'description' => '当社の技術者は、ビル設備管理の最高峰とも言える国家資格やメーカー認定資格を保有しています。これにより、他の管理会社では対応できない複雑な設備の点検・保守も、法令を遵守し、最高の品質でご提供することが可能です。',
        ]);

        Service::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?consulting',
            'name' => 'お問い合わせ',
            'description' => 'お問い合わせ・ご相談・ご質問など、お気軽にご連絡ください。',
        ]);

        // Partners
        Partner::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?office',
            'name' => 'インテリアデザイン今',
            'description' => 'プロフェッショナルやデザイン愛好者向けのインテリアデザインの最新のインスピレーションとトレンド。',
        ]);
        
        Partner::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?office',
            'name' => 'エンジニアリングポスト',
            'description' => '土木および構造工学分野の専門家向けに、深いニュースと分析を提供します。',
        ]);

        Partner::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?office',
            'name' => '>インドネシア不動産雑誌',
            'description' => 'インドネシアの不動産市場、投資、ライフスタイルを扱う、主要な印刷およびデジタルメディアです。',
        ]);

        Partner::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?office',
            'name' => 'ビルディングテックウィークリー',
            'description' => '建設および不動産業界における技術と革新に焦点を当てたオンラインプラットフォーム。',
        ]);

        Partner::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?office',
            'name' => '>アジア建築ジャーナル',
            'description' => 'アジア全体の革新的な建築デザインを紹介する月刊誌です。',
        ]);

        Partner::factory()->create([
            'image' => 'https://source.unsplash.com/random/800x600?office',
            'name' => 'グローバル建設メディア',
            'description' => '世界の建設業界向けの主要なニュースソースで、最新のトレンド、技術、プロジェクトをカバーしています。',
        ]);
    }
}
