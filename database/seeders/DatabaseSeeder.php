<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // User::create([
        //     'name' => 'Arya Budi Raharja',
        //     'email' => 'raharjaarya666@gmail.com',
        //     'password' => bcrypt('123'),
        // ]);
        // User::create([
        //     'name' => 'Nisrina Mahira',
        //     'email' => 'misrinamahira05@gmail.com',
        //     'password' => bcrypt('123'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Lifestyle dan Pengembangan Diri',
            'slug' => 'lifstyle-dan-pengembangan-diri',
        ]);
        Category::create([
            'name' => 'Travel dan Petualangan',
            'slug' => 'travel-dan-petualangan',
        ]);
        Category::create([
            'name' => 'Kuliner dan Resep',
            'slug' => 'kuliner-dan-resep',
        ]);

      

        Post::factory(20)->create();
        
        //  // Membuat postingan secara spesifik di kategori "Kuliner dan Resep"
        //  Post::factory()->count(15)->create([
        //     'category_id' => Category::where('slug', 'kuliner-dan-resep')->first()->id
        // ]);

        // Post::create([
        //     'title' => 'Resep Mie Goreng Lezat',
        //     'slug' => 'resep-mie-goreng-lezat',
        //     'excerpt' => 'Ini adalah resep mie goreng yang sangat lezat dan mudah dibuat.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos?',
        //     'category_id' => 3,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Cara Membuat Soto Ayam',
        //     'slug' => 'cara-membuat-soto-ayam',
        //     'excerpt' => 'Panduan lengkap cara membuat soto ayam yang enak dan lezat.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos?',
        //     'category_id' => 3,
        //     'user_id' => 2,
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi. Obcaecati eveniet magnam vero voluptatem ab at inventore odio reiciendis eum? Ullam molestias nostrum facilis ipsum fuga! Nostrum odio non rem voluptatibus ex ea a in quia, culpa, ipsa enim vel atque illo, inventore accusamus nemo asperiores ipsam modi aspernatur! Dolore itaque assumenda nihil ex, excepturi dicta molestias natus ab praesentium neque. Officiis harum pariatur itaque quia saepe esse commodi fugit alias neque. Fugiat, accusantium harum! Quo esse enim iste. Laboriosam nulla ab nihil praesentium incidunt?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi. Obcaecati eveniet magnam vero voluptatem ab at inventore odio reiciendis eum? Ullam molestias nostrum facilis ipsum fuga! Nostrum odio non rem voluptatibus ex ea a in quia, culpa, ipsa enim vel atque illo, inventore accusamus nemo asperiores ipsam modi aspernatur! Dolore itaque assumenda nihil ex, excepturi dicta molestias natus ab praesentium neque. Officiis harum pariatur itaque quia saepe esse commodi fugit alias neque. Fugiat, accusantium harum! Quo esse enim iste. Laboriosam nulla ab nihil praesentium incidunt?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi. Obcaecati eveniet magnam vero voluptatem ab at inventore odio reiciendis eum? Ullam molestias nostrum facilis ipsum fuga! Nostrum odio non rem voluptatibus ex ea a in quia, culpa, ipsa enim vel atque illo, inventore accusamus nemo asperiores ipsam modi aspernatur! Dolore itaque assumenda nihil ex, excepturi dicta molestias natus ab praesentium neque. Officiis harum pariatur itaque quia saepe esse commodi fugit alias neque. Fugiat, accusantium harum! Quo esse enim iste. Laboriosam nulla ab nihil praesentium incidunt?',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi.',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, libero similique quis eius officia dignissimos? Sapiente quisquam beatae, maxime consectetur numquam porro voluptas eligendi. Obcaecati eveniet magnam vero voluptatem ab at inventore odio reiciendis eum? Ullam molestias nostrum facilis ipsum fuga! Nostrum odio non rem voluptatibus ex ea a in quia, culpa, ipsa enim vel atque illo, inventore accusamus nemo asperiores ipsam modi aspernatur! Dolore itaque assumenda nihil ex, excepturi dicta molestias natus ab praesentium neque. Officiis harum pariatur itaque quia saepe esse commodi fugit alias neque. Fugiat, accusantium harum! Quo esse enim iste. Laboriosam nulla ab nihil praesentium incidunt?',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

    }
}
