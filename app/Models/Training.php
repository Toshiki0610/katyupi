<?p
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    
    protected $table = 'trainings';
    
     protected $fillable = [
        'task_id',
        'name',
        'description',
    ];

      public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
