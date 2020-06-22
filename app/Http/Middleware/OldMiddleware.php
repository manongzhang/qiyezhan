<?php
	namespace App\Http\Middleware;
	use Closure;
	class OldMiddleware {
		public function handle($request, Closure $next){
			if($request->input('age') <=20){
				return redirect("test");
			}
			return $next($request);
		}
	}
?>