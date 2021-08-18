<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
</head>
<body>
    <h1>LANDING PAGE</h1>
    public function socials_view(){
        $user = Auth::user();
        $socials = SocialLinks::where('user_id',$user->id)->age();

        return view('users.socials',['socials'=>$socials])->withUser($user);
    }
</body>
</html>