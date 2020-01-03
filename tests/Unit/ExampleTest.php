<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Enseignant;
use App\Http\Controllers\EnseignantController;
use DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    public function testAjoutEnseignant()
    {
        $enseignant=new Enseignant();
        $data = [
            'nom' => 'Bouali',
            'prenom' => 'Abdelhadi',
            'email' => 'ha_bouali@esi.dz',
            'date_naissance' =>'1999/28/11' ,
            'specialite' => 'Test',
            'licence' => 'Test2',
            'master' => 'Test3',
            'doctorat' =>'Test4' ,
            'experience' => '4 ans'
            
        ];
        $response = $this->json('POST','/app',$data);
        $response
        ->assertStatus(201)
        ->assertJson([
            'created' => true,
        ]);
    
    }
    public function testHasEnseignats()
    {
        $this->assertDatabaseHas('enseignants', [
            'email' => 'ha_bouali@esi.dz'
        ]);
    }

    

 
}
