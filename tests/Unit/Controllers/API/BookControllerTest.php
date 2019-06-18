<?php

namespace Tests\Feature;

use App\Book;
use App\User;
use Illuminate\Support\Collection;
use Tests\TestCase;


class BookControllerTest extends TestCase
{
    /**
     * @var Collection
     */
    private $user;

    /**
     * Preset test requirements
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
        $this->withHeader('Accept', 'application/json');
        $this->withHeader('Authorization', 'Bearer ' . $this->user->createToken('TestToken')->accessToken);
    }

    /**
     * @test
     */
    public function test_a_user_can_return_a_list_of_books()
    {
        $response = $this->get('/api/books');
        $response->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'message',
                'data'
            ]);
    }

    /**
     * @test
     */
    public function test_it_can_return_a_object_of_single_books()
    {
        // create a book
        $book = factory(Book::class)->create([
            "name" => "Node.js in Action",
        ]);
        $response = $this->get('/api/books/' . $book->id);
        $response->assertJson(['data' => ['name' => 'Node.js in Action']])
            ->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'message',
                'data'
            ]);
    }

    /**
     * @test
     */
    public function test_a_user_can_add_new_book_object()
    {
        $response = $this->post('/api/books', [
            "name" => "Node.js in Action",
            "description" => "Manning Publications. PAPERBACK. Condition: Good. 1617290572 Item in good condition.",
            "isbn" => "1617290572",
            "author" => "Cantelon, Mike; Harter"
        ]);
        $response->assertJson(['data' => [
            "name" => "Node.js in Action",
            "description" => "Manning Publications. PAPERBACK. Condition: Good. 1617290572 Item in good condition.",
            "isbn" => "1617290572",
            "author" => "Cantelon, Mike; Harter"
        ]])->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'message',
                'data'
            ]);

    }

    /**
     * @test
     */
    public function test_a_user_can_update_existing_book_object()
    {
        //create new book
        $book = factory(Book::class)->create([
            "name" => "Node.js in Action",
            "description" => "Node.js is programming language",
            "isbn" => "1617290572",
            "author" => "Cantelon, Mike; Harter",
            "user_id" => 1
        ]);

        // changing name and description of the book
        $response = $this->put('/api/books/' . $book->id, [
            "name" => "Node.js latest version",
            "description" => "Node.js is version updated",
            "isbn" => "1617290572",
            "author" => "Cantelon, Mike; Harter",
            "user_id" => 1
        ]);

        // looking for the same book name and description
        $response->assertJson(['data' => [
            "name" => "Node.js latest version",
            "description" => "Node.js is version updated",
        ]
        ])->assertStatus(200)
            ->assertJsonStructure([
                'success',
                'message',
                'data'
            ]);
    }

    /**
     * @test
     */
    public function test_a_user_can_delete_a_book_created_by_self()
    {
        //create new book
        $book = factory(Book::class)->create([
            "name" => "Node.js in Action",
            "description" => "Node.js is programming language",
            "isbn" => "1617290572",
            "author" => "Cantelon, Mike; Harter",
            "user_id" => $this->user->id
        ]);

        $response = $this->delete('/api/books/' . $book->id);
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function test_a_user_cannot_delete_a_book_created_by_others()
    {
        //create new book
        $book = factory(Book::class)->create([
            "name" => "Node.js in Action",
            "description" => "Node.js is programming language",
            "isbn" => "1617290572",
            "author" => "Cantelon, Mike; Harter",
            "user_id" => 5
        ]);

        $response = $this->delete('/api/books/' . $book->id);
        $response->assertStatus(401);
    }
}
