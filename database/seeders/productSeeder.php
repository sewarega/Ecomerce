<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([


            [
                'name'=>'Soni Mobile',
                "price"=>"1000",
                "description"=>"A Soni Mobile much more future",
                "category"=>"Mobile",
                "gallery"=>"https://static5.depositphotos.com/1000128/458/i/950/depositphotos_4586342-stock-photo-set-touchscreen-smartphones.jpg"
            
            ],
            [
                'name'=>'smart laptop',
                "price"=>"9000",
                "description"=>"A smart laptop much more future",
                "category"=>"laptop",
                "gallery"=>"https://previews.123rf.com/images/jamesstar/jamesstar1709/jamesstar170900111/87801466-laptop-with-smart-phone.jpg"
            
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"7000",
                "description"=>"A smart TV much more future",
                "category"=>"Tv",
                "gallery"=>"https://st.depositphotos.com/1000128/5100/i/950/depositphotos_51000613-stock-photo-smart-tv.jpg"
            
            ],
            ['name'=>'smart fridge',
            "price"=>"3000",
            "description"=>"A smart fridge and much more future",
            "category"=>"fridge",
            "gallery"=>"https://api.time.com/wp-content/uploads/2016/05/family_hub_black_stainless.jpg"
        
        ],
        [
            'name'=>'panasonic Tv',
            "price"=>"4000",
            "description"=>"A smart Tv and much more future",
            "category"=>"Tv",
            "gallery"=>"https://www.bhphotovideo.com/images/images500x500/nec_c981q_98_class_4k_1529431667_1416685.jpg"
        
        ],
        
        [
            'name'=>'Soni Mobile',
            "price"=>"5000",
            "description"=>"A smart Mobile much more future",
            "category"=>"Mobile",
            "gallery"=>"https://static5.depositphotos.com/1000128/458/i/950/depositphotos_4586342-stock-photo-set-touchscreen-smartphones.jpg"
        
        ],
      
        [
            'name'=>'Soni Tv',
            "price"=>"7000",
            "description"=>"A smart TV much more future",
            "category"=>"Tv",
            "gallery"=>"https://st.depositphotos.com/1000128/5100/i/950/depositphotos_51000613-stock-photo-smart-tv.jpg"
        
        ],
       
       
        
        
        
]); 
    }
}
