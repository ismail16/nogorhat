<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetPaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('paypal_sets')->insert([
            'title' => 'Paypal',
            'ClientId' => '5487599592',
            'currency' => 'USD',
            'Secret' => 'gdfgrt1234567gvjhvjjhzjhzsjh89',
            'Description' => 'Set Paypal Account !',
            'Status' => 0,
            'SandboxStatus' => 1,
        ]);

        DB::table('stripe_sets')->insert([
            'title' => 'Stripe',
            'SecretKey' => '5487599592',
            'PublishableKey' => 'gdfgrt1234567gvjhvjjhzjhzsjh89',
            'Description' => 'Set Stripe Account !',
            'Status' => 0,
            'SandboxStatus' => 1,
        ]);

        DB::table('two_checkout_sets')->insert([
            'title' => 'Paypal',
            'SellerId' => 'Input SellerId',
            'PublishableKey' => 'Input PublishableKey',
            'PrivateKey' => 'Input PrivateKey',
            'description' => 'Set Paypal Account !',
            'status' => 0,
            'SandboxStatus' => 1,
        ]);

        DB::table('cash_on_delivery_sets')->insert([
            'title' => 'Cash On Delivery',
            'Description' => 'Set Cash On Delivery !',
            'Status' => 1,
        ]);
    }
}
