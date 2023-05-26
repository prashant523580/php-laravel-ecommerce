<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("products")->insert(
            [
            [
            'name'=>'Sony',
            'price'=>'1000',
            'description'=>'this is descriptions.',
            'gallery'=>'https://media.istockphoto.com/id/1318420912/vector/mock-up-screen-phone.jpg?s=612x612&w=0&k=20&c=z7RTcOE_vnT9eRcSEQhw0EVVRDb9JdDPaApfyO5nFxM=',
            'category'=>'cover'
        ],
        [
            'name'=>'Iphone',
            'price'=>'1000',
            'description'=>'this is descriptions.',
            'gallery'=>'https://media.istockphoto.com/id/1318420912/vector/mock-up-screen-phone.jpg?s=612x612&w=0&k=20&c=z7RTcOE_vnT9eRcSEQhw0EVVRDb9JdDPaApfyO5nFxM=',
            'category'=>'cover'
        ],
        [
            'name'=>'Samsung',
            'price'=>'1000',
            'description'=>'this is descriptions.',
            'gallery'=>'https://media.istockphoto.com/id/1318420912/vector/mock-up-screen-phone.jpg?s=612x612&w=0&k=20&c=z7RTcOE_vnT9eRcSEQhw0EVVRDb9JdDPaApfyO5nFxM=',
            'category'=>'cover'
        ],
        [
            'name'=>'Lenevo',
            'price'=>'1000',
            'description'=>'this is descriptions.',
            'gallery'=>'https://media.istockphoto.com/id/1318420912/vector/mock-up-screen-phone.jpg?s=612x612&w=0&k=20&c=z7RTcOE_vnT9eRcSEQhw0EVVRDb9JdDPaApfyO5nFxM=',
            'category'=>'cover'
        ]
    ]
    );
    }
}
