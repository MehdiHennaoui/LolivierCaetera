<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Article;

class CreationArticleTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreatePost()
    {
        
    	/*$subtitle = 'Un sous-titre';
        $this->visit('/posts/create')
        	->type('un titre', 'title')
        	->type($subtitle, 'subtitle')
        	->type('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pharetra orci eget ante accumsan, nec lacinia sem vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut bibendum lacus, in convallis diam. In congue nibh non congue vestibulum. Morbi in sagittis nibh, sed tempus risus. Suspendisse vestibulum nibh quam, eu mollis eros bibendum et. Praesent vel purus nunc.', 'body')
        	->press('Crée nouveau article');
        */	

    }

    public function testShowCreatePost()
    {
    	/*
        $article = Article::orderBy('id', 'desc')->first();
    	$subtitle = 'Un sous-titre';

    	$this->assertEquals($subtitle, $article->subtitle, 'vérification du sous titre');

    	$this->visit('/posts/show/'. $article->id)
    		->see('un titre')
    		->see($subtitle)
    		->see('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pharetra orci eget ante accumsan, nec lacinia sem vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut bibendum lacus, in convallis diam. In congue nibh non congue vestibulum. Morbi in sagittis nibh, sed tempus risus. Suspendisse vestibulum nibh quam, eu mollis eros bibendum et. Praesent vel purus nunc.');
        */    
    }
}