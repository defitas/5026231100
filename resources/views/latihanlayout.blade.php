<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Helperlog Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="latihanlayout.css" >
</head>
<body>
    <div class="sidebar">
        <a src="#" class="text-light d-flex justify-content-end"><<</a>
        <div class="profile d-flex align-items-center">
            <img src="materialD/Frame 40792-6.png" alt="Profile" class="profile-img">
            <div class="profile-info">
                <h6 class="mb-0">User</h6>
                <p class="mb-0 opacity-75">user@mail.com</p>
            </div>
        </div>
    
        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="#" class="nav-link active text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                         class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" 
                              d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2-2H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                    </svg>
                    Helperlog
                </a>
            </li>
            <li><a href="#" class="nav-link hover text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>Helperfind</a></li>
            <li><a href="#" class="nav-link hover text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
              </svg>Helperassist</a></li>
              <button class="btn bg-secondary text-white d-inline-flex align-items-center" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                </svg>
                 Log Out
                </button>
        </ul>  
        </div>
    </div>

    <div class="content">
        <h1>Helperlog Dashboard</h1>
        <br>
        <br>
        <div class="card p-3 mb-3">
            <div class="d-flex align-items-center">
                <img src="materialD/Frame 627275.png" alt="Intan Permata" class="profile-img">
        
                <div class="ms-3 flex-grow-1">
                    <h6 class="mb-1"><strong>Intan Permata</strong></h6>
                    <p class="mb-0"><i>Baby Sitter</i></p>
                    <p class="mb-0 text-muted">Masa Kontrak: 12 bulan</p>
                </div>
        
                <div class="text-end">
                    <div class="ratings">
                        <img src="materialD/greystar.png">
                        <img src="materialD/greystar.png">
                        <img src="materialD/greystar.png">
                        <img src="materialD/greystar.png">
                        <img src="materialD/greystar.png">
                    </div>
                    <span class="text-muted d-block text-center">Beri Penilaian untuk Intan 🤗</span>
                </div>
            </div>
        </div>
        
        <div class="card p-3 mb-3">
            <div class="d-flex align-items-center">
                <img src="materialD/Frame 40792-1.png" alt="Intan Permata" class="profile-img">
        
                <div class="ms-3 flex-grow-1">
                    <h6 class="mb-1"><strong>Budi Dorami</strong></h6>
                    <p class="mb-0"><i>Satpam</i></p>
                    <p class="mb-0 text-muted">Masa Kontrak: 6 bulan</p>
                </div>
        
                <div class="text-end">
                    <div class="ratings">
                        <img src="materialD/yellowstar1.png">
                        <img src="materialD/yellowstar1.png">
                        <img src="materialD/yellowstar1.png">
                        <img src="materialD/yellowstar1.png">
                        <img src="materialD/greystar.png">
                    </div>
                    <span class="text-muted d-block text-center">Sudah diberi Penilaian 👍</span>
                </div>
            </div>
        </div>
        
</body>
</html>
