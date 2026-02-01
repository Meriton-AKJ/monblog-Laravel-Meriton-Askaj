@include('header')
<div class="container mt-4">
    <div class="row">

        <!-- texte lorem à gauche -->
        <div class="col-md-6">
            <h2>Ouvrez les portes de <br>l'opportunité</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, temporibus blanditiis.
                Quisquam perferendis animi, odit nisi voluptates excepturi debitis dolore exercitationem alias vel repellendus ipsa doloribus
                fugit, ullam laudantium minus cum fugiat. Temporibus iste ipsa minima consectetur, aliquam nisi earum sed dicta a error
                incidunt corrupti, consequuntur veritatis omnis quasi maxime dolorum eius corporis animi deleniti nulla a explicabo
                cupiditate aspernatur soluta voluptates. Aliquam saepe, accusantium deleniti eligendi, corporis aut nemo tempora iste
                nostrum repellat sit corrupti alias reprehenderit officiis eos! Reprehenderit ut quod ipsa maiores molestias quae atque
                doloremque quibusdam! Vero, ab fugiat impedit atque natus ut nisi consequuntur unde aperiam porr.
            </p>
        </div>

        <!-- formulaire à droite -->
        <div class="col-md-6">
            <form action="{{ route('register') }}" method="POST" id="registration-form">
                @csrf
                <div class="form-group">
                    <label for="user-register" class="text-muted mb-1"><small>Nom d'utilisateur</small></label>
                    <input value="{{old("username")}}" name="username" id="username-register"> 
                    @error('username')
                     <p class="m-0 small alert alert-danger shadow-sm">{{$message }}</p>
                    @enderror

                    <hr>
                    <label>Email address</label>
                    <input  type="email" class="form-control" name="email" value="{{ old('email') }}">
                    <small class="form-text text-muted">We'll never share your email.</small>
                </div>

                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control"name="password">
                    <hr>
                    <label>Confirmer le mot de passe</label>
                    <input name="password_confirmation" id="password-register-confirm"
                        class="form-control" type="password" placeholder="Confirmer le mot de passe" />
                </div>

                <button type="submit" class="btn btn-success w-100">
                    Inscrivez-vous à notre Blog
                </button>
            </form>
        </div>


    </div>
</div>


@include('footer')