<?

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller
{
  public function index()
  {
    $userModel = new UserModel();
    $data['users'] = $userModel->orderby('id' . 'DESC')->findAll();
    return view('user_view', $data);
  }

  public function store()
  {
    $userModel = new UserModel();
  }
}
