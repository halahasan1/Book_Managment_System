<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title'      => 'Harry Potter',
            'content'    => 'The series follows the life of a boy named Harry Potter. In the first book, Harry Potter and the Philosophers Stone (Harry Potter and the Sorcerers Stone in the US), Harry lives in a cupboard under the stairs in the house of the Dursleys, his aunt, uncle and cousin, who all treat him poorly. At the age of 11, Harry discovers that he is a wizard. He meets a half-giant named Hagrid who gives him a letter of acceptance to attend the Hogwarts School of Witchcraft and Wizardry. Harry learns that his parents',
            'author_id'  => Author::Where('name','Hala Hasan')->first()->id,
            'category_id'=> Category::Where('name','Fantasy')->first()->id,
            'cover'      =>'covers/download.jpeg'
        ]);

        Book::create([
            'title'      => 'It Ends with Us',
            'content'    => 'It Ends with Us is a romance novel by Colleen Hoover, published by Atria Books on August 2, 2016. Based on the relationship between her mother and father, Hoover described it as "the hardest book Ive ever written. It explores themes of domestic violence and emotional abuse.

                              As of 2019, the novel had sold over one million copies worldwide and been translated into over twenty languages. In 2021, the novel experienced a resurgence in popularity through TikTok and topped sales lists for 2022 and 2023. A sequel titled It Starts with Us was published in October 2022. A film adaptation was released in August 2024, with a screenplay by Christy Hall. It was directed by Justin Baldoni, with Blake Lively, Baldoni, and Brandon Sklenar in leading roles.',
            'author_id'  => Author::Where('name','Colleen Hoover')->first()->id,
            'category_id'=> Category::Where('name','Romance')->first()->id,
            'cover'      =>'covers/It_Ends_with_Us.png'
        ]);

        Book::create([
            'title'      => 'The Phaedo',
            'content'    => "Since antiquity the Phaedo has been considered the source of “the twin pillars of Platonism” – the theory of ideas and the immortality of the soul. Tracing the movement of the argument through the work as a whole, Burger is led to a radical rethinking of those doctrines. That movement is indicated by the structure of the dialogue, divided in two halves by a central interlude in which Socrates warns against the great danger of “misology,” loss of trust in human reason.  The discussion that follows, with that danger in mind, brings about a transformation in the understanding of knowledge, the ideas, the soul, death, and immortality. With this second sailing, as Socrates calls it, the Platonism presented in the Phaedo emerges as precisely the target of which the dialogue is a critique.

                              This revised and expanded edition includes a new Preface, “The Death of Socrates and the Post-Socratic Schools, and an essay, “On Plato's Euthyphro.”

                              “This is a comprehensive study of the Phaedo, thoroughly researched, and sparkling with insights into the text.– Paul Woodruff, University of Texas

                              “Burger has a wonderfully fertile mind and supports her imaginative thesis with a close reading, extremely sensitive to nuance.” – Jerome Schiller, The Journal of the History of Philosophy 1986

                              On Platos Euthyphro presents a more thoughtful and careful analysis of the dialogue than any previous full-length commentary. -- Lewis Fallis, Interpretation 2016",
            'author_id'  => Author::Where('name','Moneer Kfori')->first()->id,
            'category_id'=> Category::Where('name','Historical Fiction')->first()->id,
            'cover'      =>'covers/download (1).jpeg'
        ]);
    }
}
