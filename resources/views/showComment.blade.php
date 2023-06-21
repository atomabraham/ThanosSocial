@include('header')
<!--Body-->
<div class="row mx-auto">
    <!--Block de gauche-->
    <div class="col-3">
        <!--informations de profil de gauche-->
        <div class="row" style="margin-top: 10px">
            <div class="col-2">
                <img class="h-10 w-10 rounded-full object-cover inline-flex items-right justify-end" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            </div>
            <div class="col-9">
                <p style="color:rgba(0, 0, 0, 0.685);:inherit;font-weight: bold;font-size:15px;margin-top:2%;font-family:Arial, Helvetica, sans-serif">{{Auth::user()->secondname}} {{Auth::user()->name}}</p>
            </div>
        </div>
        <!--Amis-->
        <div class="row" style="margin-top: 10px">
            <div class="col-2"  style="color:#9c26b6b9">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                </svg>
            </div>
            <div class="col-9" style="margin-top: 2%">
                <a href="#" style="font-style:inherit;font-weight: bold;font-size:15px;margin-top:5%;font-family:Arial, Helvetica, sans-serif;text-decoration:none;color:rgba(0, 0, 0, 0.685);">Amis</a>
            </div>
        </div>
        <!--les plus réçent-->
        <div class="row" style="margin-top: 5%">
            <div class="col-2"  style="color:#9c26b6b9">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584.531.531 0 0 0 .013-.012l.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354a.717.717 0 0 0-.012.012A6.973 6.973 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0z"/>
                </svg>
            </div>
            <div class="col-9" style="margin-top: 2%">
                <a href="#" style="font-style:inherit;font-weight: bold;font-size:15px;margin-top:5%;font-family:Arial, Helvetica, sans-serif;text-decoration:none;color:rgba(0, 0, 0, 0.685);">Les plus réçent</a>
            </div>
        </div>
        <!--Groupes-->
        <div class="row" style="margin-top: 5%">
            <div class="col-2"  style="color:#9c26b6b9">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                </svg>
            </div>
            <div class="col-9" style="margin-top: 2%">
                <a href="#" style="font-style:inherit;font-weight: bold;font-size:15px;margin-top:5%;font-family:Arial, Helvetica, sans-serif;text-decoration:none;color:rgba(0, 0, 0, 0.685);">Groupes</a>
            </div>
        </div>
        <!--Vidéos-->
        <div class="row" style="margin-top: 5%">
            <div class="col-2"  style="color:#9c26b6b9">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                </svg>
            </div>
            <div class="col-9" style="margin-top: 2%">
                <a href="#" style="font-style:inherit;font-weight: bold;font-size:15px;margin-top:5%;font-family:Arial, Helvetica, sans-serif;text-decoration:none;color:rgba(0, 0, 0, 0.685);">Vidéos</a>
            </div>
        </div>
        <!--Enregistrements-->
        <div class="row" style="margin-top: 5%">
            <div class="col-2"  style="color:#9c26b6b9">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                </svg>
            </div>
            <div class="col-9" style="margin-top: 2%">
                <a href="#" style="font-style:inherit;font-weight: bold;font-size:15px;margin-top:5%;font-family:Arial, Helvetica, sans-serif;text-decoration:none;color:rgba(0, 0, 0, 0.685);">Enregistrements</a>
            </div>
        </div>
        <!--Pages-->
        <div class="row" style="margin-top: 5%">
            <div class="col-2"  style="color:#9c26b6b9">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                </svg>
            </div>
            <div class="col-9" style="margin-top: 2%">
                <a href="#" style="font-style:inherit;font-weight: bold;font-size:15px;margin-top:5%;font-family:Arial, Helvetica, sans-serif;text-decoration:none;color:rgba(0, 0, 0, 0.685);">Pages</a>
            </div>
        </div>
        <!--Message-->
        <div class="row" style="margin-top: 5%">
            <div class="col-2"  style="color:#9c26b6b9">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                </svg>
            </div>
            <div class="col-9" style="margin-top: 2%">
                <a href="#" style="font-style:inherit;font-weight: bold;font-size:15px;margin-top:5%;font-family:Arial, Helvetica, sans-serif;text-decoration:none;color:rgba(0, 0, 0, 0.685);">Messages</a>
            </div>
        </div>
    </div>
    <!--Block du milieu-->
    <div class="col-6" style="">
        <!--affichage des postes-->
            <div class="row" style="background-color:white;margin-top: 5%;padding:10px;box-shadow: rgba(0, 0, 0, 0.24) 0.5px 1px 1px 0px;border-radius:8px">
                <!--l'entète du block de la publication-->
                <div class="row">
                    <!--affichage de la photo de profil,du nom et de la date-->
                    <div class="col-2">
                        <img class="h-10 w-10 rounded-full object-cover inline-flex items-right justify-end" src="" />
                    </div>
                    <div class="col-5" style="">
                        <p style="font-size: 13px;font-weight: bold;color:black"> </p>
                        <p style="margin-top: -8%;font-size:13px"></p>
                    </div>
                    <!--affichage des boutons d'options-->
                    <div class="col-5">
                        <div class="row justify-end">
                            <div class="col-3">
                                <div class="ml-3 relative">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                                <button class="flex text-sm  border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                                    </svg>
                                                </button>
                                        </x-slot>

                                        <x-slot name="content">

                                            <div class="row block px-4 py-2 text-x" style="font-weight: bold">
                                                <div class="col-2" style="margin-top: 10%">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                                    </svg>
                                                </div>
                                                <div class="col-10">
                                                    <a href="#" style="text-decoration: none;color:black">Enregistrer la publication</a>
                                                </div>
                                            </div>

                                            <div class="border-t border-gray-200"></div>


                                            <div class="row block px-4 py-2 text-x" style="font-weight: bold">
                                                <div class="col-2" style="margin-top: 20%">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                                    </svg>
                                                </div>
                                                <div class="col-10">
                                                        <a href="#" style="text-decoration: none;color:black">Activer les notification pour ce post</a>
                                                </div>
                                            </div>

                                            <div class="border-t border-gray-200"></div>

                                            <div class="row block px-4 py-2 text-x" style="font-weight: bold">
                                                <div class="col-2" style="margin-top: 10%">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                    </svg>
                                                </div>
                                                <div class="col-10">
                                                        <a href="{{route('deletePost')}}" style="text-decoration: none;color:black">Masquer cette publication</a>
                                                </div>
                                            </div>

                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--affichage du contenu du post-->
                <div class="row" id="divpost" style="background-color:#275baf" id="block-post">
                    <div class="col-10">
                        <p style="color: white;text-align:center;padding-left:60px;padding-top:90px;padding-bottom:65px;font-size:30px">{{$PostText}}</p>
                    </div>
                </div>
                <!--affichage du nombre de j'aime et de commentaire-->
                <div class="row">
                    <!--affichage du nombre de j'aime-->
                    <div class="col-1">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-1 justify-end" style="text-align:right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16" style="color: #9b26b6">
                                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                </svg>
                            </div>
                            <div class="col-2">
                                <p>50K</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <!--affichage du nombre de commentaire-->
                    <div class="col-6">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-1 justify-end" style="text-align:right; margin-top:2px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16" style="color: #9b26b6">
                                    <path d="M2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                </svg>
                            </div>
                            <div class="col-6   ">
                                <p>20 Commentaires</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-400" style="margin-top: -10px"></div>
                <!--option de publication-->
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                </svg>
                            </div>
                            <div class="col-4" style="margin-top: 5px">J'aime</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                                </svg>
                            </div>
                            <div class="col-4" style="margin-top: 5px">Partager</div>
                        </div>
                    </div>
                </div>
                <!--script qui gère les background-->
                <script>
                    function entierAleatoire(min, max)
                    {
                     return Math.floor(Math.random() * (max - min + 1)) + min;
                    }
                    //Utilisation
                    //La variable contient un nombre aléatoire compris entre 1 et 10
                    var entier = entierAleatoire(1, 3);
                    if(entier==1){
                        divpost.style.color='red'
                    }
                </script>
            </div>

    <div class="col-3"></div>
</div>

