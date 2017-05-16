<?php

use Illuminate\Database\Seeder;

class ContactSectionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            'formated_address' => 'Kontiontie 14, 53300 Lappeenranta, Finland',
            'wrapped_address'  => '<span class="street-address">Kontiontie 14</span>, <span class="postal-code">53300</span> <span class="locality">Lappeenranta</span>, <span class="country-name">Finland</span>',
            'street_number'    => '14',
            'route'            => 'Kontiontie',
            'locality'         => 'Lappeenranta',
            'country'          => 'Finland',
            'postal_code'      => '53300',
            'lat'              => 61.0708091,
            'long'             => 28.2818818,
            'phone_number'     => '+358 02 111-1111',
            'email'            => 'fake_email@email.com',
            'facebook_label'   => 'Salon Demo Group',
            'facebook_url'     => 'www.facebook.com',
            'twitter_label'    => '@salonDemo',
            'twitter_url'      => 'www.twitter.com',
        ];

        $contact = new \App\ContactSection();
        $contact->fill($data);
        $contact->save();
        $contact->section()->create([
            'title' => 'QUESTIONS OR COMMENTS?',
            'body'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi aut delectus dolorum eius enim explicabo hic illum non quam quasi ratione saepe sapiente similique tenetur veniam vitae, voluptas! Omnis?',
            'color' => 'style2',
        ]);

        $contact = new \App\ContactSection();
        $contact->fill($data);
        $contact->save();


    }

}
