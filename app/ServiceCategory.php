<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{

    protected $fillable = ['name', 'approved'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function approve()
    {
        if($this->approved){
            $this->update(['approved' => false]);

            return 'deactive';
        }

        $this->update(['approved' => true]);
        return 'active';
    }
}
