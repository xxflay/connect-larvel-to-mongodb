<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function testInsert()
    {
        $user = new User;
        $user->name = 'John Doe';
        $user->title = 'admin';
        $user->age = 35;
        $user->save();
        $this->assertEquals(true, $user->exists);
        $this->assertEquals(1, User::count());
        $this->assertTrue(isset($user->_id));
        $this->assertTrue(is_string($user->_id));
        $this->assertNotEquals('', (string) $user->_id);
        $this->assertNotEquals(0, strlen((string) $user->_id));
        $this->assertInstanceOf('Carbon\Carbon', $user->created_at);
        $raw = $user->getAttributes();
        $this->assertInstanceOf('MongoDB\BSON\ObjectID', $raw['_id']);
        $this->assertEquals('John Doe', $user->name);
        $this->assertEquals(35, $user->age);
    }
}
