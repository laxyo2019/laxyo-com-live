<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
	protected $table = 'form_vendors';

  	protected $fillable = ['company_name', 'person_name', 'person_desg', 'person_email', 'postal_address', 'person_phone1', 'person_phone2', 'products', 'epc', 'gst'];

  
}