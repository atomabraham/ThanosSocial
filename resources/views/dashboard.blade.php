<x-app-layout>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="background-color:white;margin-top:10px;border-radius:8px">
            <div class="row" style="padding-top: 2%;padding-bottom: 2%">
                <div class="col-1">
                    <img class="h-10 w-10 rounded-full object-cover inline-flex items-right justify-end" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
                <div class="col-10">
                     <input type="text" name="" id=""  data-bs-toggle="modal" data-bs-target="#staticBackdrop" placeholder="Quoi de neuf,{{Auth::user()->secondname}} ?" style="width:100%;border:none;background-color:rgb(233, 231, 231);border-radius:20px;cursor:pointer;" >
                </div>
            </div>
            <div class="row">
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="text-align:center;margin-left:25%"><b>Créer une publication</b></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-2">
                                    <img class="h-10 w-10 rounded-full object-cover inline-flex items-right justify-end" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </div>
                                <div class="col-10">
                                    <p><b>{{ Auth::user()->secondname}} {{ Auth::user()->name}}</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <textarea name="" id="" cols="10" rows="2" placeholder="Quoi de neuf, {{ Auth::user()->secondname}} ?" style="border: none;font-size:20px;"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button>
                                        <div class="row">
                                            <div class="col-1" style="margin-top: 3%">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16" style="color: rgba(0, 0, 0, 0.747)">
                                                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                                                </svg>
                                            </div>
                                            <div class="col-8">
                                                Vidéo
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-4 flex justify-center">
                                    <button>
                                        <div class="row">
                                            <div class="col-1" style="margin-top: 3%">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16" style="color: rgba(0, 0, 0, 0.747)">
                                                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                                    <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                                                </svg>
                                            </div>
                                            <div class="col-8">
                                                Image
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-4 flex justify-end">
                                    <button>
                                        <div class="row">
                                            <div class="col-1" style="margin-top: 3%">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16" style="color: rgba(0, 0, 0, 0.747)">
                                                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                                                </svg>
                                            </div>
                                            <div class="col-8">
                                                GIF
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" style="width: 100%;background-color:#9b26b6;border:none">Publier</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</x-app-layout>
