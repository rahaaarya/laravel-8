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

        Post::factory(20)->create();

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
