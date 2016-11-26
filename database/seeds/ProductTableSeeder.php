<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product= new Product([
            'imagePath'=>'https://m.westeros.org/images/a/a3/AFeastForCrows.jpg',
            'title'=>'A Feast for Crows',
            'description'=>'The King of Westeros sends his greeting. Be sure to receive  him properly with this book',
            'price'=>22.67
        ]);
        $product->save();

        $product= new Product([
            'imagePath'=>'https://upload.wikimedia.org/wikipedia/en/d/dc/A_Song_of_Ice_and_Fire_book_collection_box_set_cover.jpg',
            'title'=>'A Song of Ice and Fire',
            'description'=>'Are dragons real or merely story for the kids? Find out here',
            'price'=>21.00
        ]);
        $product->save();

        $product= new Product([
            'imagePath'=>'http://ii.wbshop.com/fcgi-bin/iipsrv.fcgi?FIF=/images/warnerbros/source/warnerbros/hpbthc02.tif&wid=3000&cvt=jpeg',
            'title'=>'Harry Potter',
            'description'=>'Super cool- at least as a child',
            'price'=>22.67
        ]);
        $product->save();

        $product= new Product([
            'imagePath'=>'http://ecx.images-amazon.com/images/I/516GyHY9p6L.jpg',
            'title'=>'The Lord of the Ring',
            'description'=>'You had better watch the movie!!',
            'price'=>17.30
        ]);
        $product->save();

        $product= new Product([
            'imagePath'=>'http://www.smcm.edu/library/wp-content/uploads/sites/63/2014/08/anthills.jpg?w=98',
            'title'=>'Anthills of the Savannah',
            'description'=>'An iconic book by an iconic author! A must read by everyone',
            'price'=>20.00
        ]);
        $product->save();

        $product= new Product([
            'imagePath'=>'https://images-na.ssl-images-amazon.com/images/I/519Y7Gye9BL._AC_UL320_SR244,320_.jpg',
            'title'=>'The Sword of the Truth',
            'description'=>'A Legendary book! Do not miss out',
            'price'=>25.00
        ]);
        $product->save();

        $product= new Product([
            'imagePath'=>'http://vignette1.wikia.nocookie.net/sot/images/f/fe/Wizards_first_rule.jpg/revision/latest?cb=20070518050851',
            'title'=>'Wizards of the First Rule',
            'description'=>'Do you wish to now the way of magic? This is the book on how to wave that wand.',
            'price'=>22.67
        ]);
        $product->save();

        $product= new Product([
            'imagePath'=>'https://images-na.ssl-images-amazon.com/images/I/71hy-QVPlKL.jpg',
            'title'=>'Purple Hibiscus',
            'description'=>'All flowers are sweet but some are just purple... Find out more here',
            'price'=>22.67
        ]);
        $product->save();

        $product= new Product([
            'imagePath'=>'https://generaljohnstrickermslibrary.pbworks.com/f/1394119674/animal_farm_cover2014.jpg',
            'title'=>'Animal Farm',
            'description'=>'The best book ever written on personification',
            'price'=>19.67
        ]);
        $product->save();
    }
}
