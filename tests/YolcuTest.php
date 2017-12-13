<?php
namespace Tkaratug\Yolcu;

use Tests\TestCase;

class YolcuTest extends TestCase
{
    /**
     * Test for Countries Page
     *
     * @return void
     */
    public function testCountriesPage()
    {
        $response = $this->get('/yolcu');
        $response->assertStatus(200)->assertSee('Countries');
    }

    /**
     * Test for Hotels Page
     *
     * @return void
     */
    public function testHotelsPage()
    {
        $response = $this->get('/yolcu/country/1');
        $response->assertStatus(200)->assertSee('Country');
    }

    /**
     * Test for Hotel Detail Page
     *
     * @return void
     */
    public function testHotelDetailPage()
    {
        $response = $this->get('/yolcu/hotel/1');
        $response->assertStatus(200)->assertSee('Hotel');
    }

    /**
     * Test for Adding Review to Country
     *
     * @return void
     */
    public function testCountryReview()
    {
        $data   = [
            'review_text'   => 'dummy review',
            '_token'        => csrf_token()
        ];

        $response = $this->call('POST', '/yolcu/country/1/review', $data);
        $response->assertStatus(302);
    }

    /**
     * Test for Adding Review to Hotel
     *
     * @return void
     */
    public function testHotelReview()
    {
        $data   = [
            'review_text'   => 'dummy review',
            '_token'        => csrf_token()
        ];

        $response = $this->call('POST', '/yolcu/hotel/1/review', $data);
        $response->assertStatus(302);
    }
}
