<?
namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        dd('our response');
        return $request->wantsJson()
            ?  response()->json(['two-factor' => false])
            : redirect()->intended(Fortify::redirects('login'));

    }
}

