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
            'nom' => 'lamia',
            'prenom' => 'lamia',
            'email' => 'lamia',
            'date_naissance' =>'lamia' ,
            'specialite' => 'lamia',
            'licence' => 'lamia',
            'master' => 'lamia',
            'doctorat' =>'lamia' ,
            'experience' => '22'
            
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
            'email' => 'hl_selmane@esi.dz'
        ]);
    }

    

 
}
