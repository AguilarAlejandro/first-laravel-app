@extends('layouts.app')

@section('content')

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


<div class="container profile-page">
    <div class="row justify-content-around">

        <div class="col-md-4">
            <img class="profile-picture" alt="ProfileImage"
                src="https://images.vexels.com/media/users/3/137380/isolated/preview/1b2ca367caa7eff8b45c09ec09b44c16-icono-de-instagram-logo-by-vexels.png">
        </div>

        <div class="col-md-8">
            <div class="row pt-3">
                <p class="profile-name">{{$user->username}}</p>
                <button class="ml-3 btn btn-primary btn-follow">Follow</button>
            </div>
            <div class="row p-0 mt-2">
                <div class="col-4 p-0">
                    <p>
                        <strong>{{$user->profile->postNumber}}</strong> posts
                    </p>
                </div>
                <div class="col-4 p-0">
                    <p>
                        <strong>{{$user->profile->taggedNumber}}</strong> followers
                    </p>
                </div>
                <div class="col-4 p-0">
                    <p>
                        <strong>212</strong> following
                    </p>
                </div>

            </div>
            <div class="row">
                <p style="word-wrap: break-word; max-width: 100%">{{$user->profile->description}}</p>
            </div>
            <div class="row">
                <a href="https://www.mercadopago.com.pe" class="font-weight-bold profile-url">{{$user->profile->url??''}}</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="d-flex align-items-center">
            <i class="fas fa-list"></i>
            <p class="ml-1 my-auto">Publicaciones</p>
        </div>
        <div class="d-flex align-items-center ml-3">
        <i class="fas fa-address-book"></i>
        <p class="ml-1 my-auto">Etiquetado</p>
        
        </div>
    </div>
    <div class="row justify-content-center pt-5">

        <div class="col-md-4">
            <img class="w-100" src="https://upload.wikimedia.org/wikipedia/commons/d/de/Windows_live_square.JPG" alt="">
        </div>
        <div class="col-md-4">
            <img class="w-100" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISERUTEhMVFRUVFhUVFxcXFxgXFxcYFRUWGBgXFxcYHigiGRolHRYYITEhJSorLi4uGB8zODMsNygtLy4BCgoKDg0OGg8PGisdFR0rLS0tLS0rLy0tLS0tLS0tLS0tLS0tLSstLS0rLSstLS0rLS0tLS0tNy0tLS0tKzc3N//AABEIAOEA4AMBIgACEQEDEQH/xAAbAAEAAwADAQAAAAAAAAAAAAAABQYHAQIEA//EAFEQAAEDAgMDBAoNCQcEAwAAAAEAAhEDIQQSMQVBURMiYZIGBxQkMlNxc4GRFSMzNEJSYmOhsbLS4RclNUNUVcHR8BaCg6KzwtNFZHKTRHSE/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAEDAgT/xAAcEQEBAAIDAQEAAAAAAAAAAAAAARExAhITAyH/2gAMAwEAAhEDEQA/ANsXCLN9tbVxpxWLpUKjjkcwsa10FjOTYXQIg3JPEAON1zy5dVky0lJWU1uySvzaVOvUJABfVL3Zb5vB5uliYNzLYX3xHZHWc8Mp1qga0w5xeSXRfXKBeQLbwTuAPHrHXStPRZizsiqveXCrVbSbIALzmqFsgkw2wkEzpEWJNvjQ7JKxDqrq9XIGjKwOcHHmgkkZPLxkyLAXesOlaoiytnZFiGtNR1SsS4gNYHOMSYEjLbUdMAk6wFXshxDKYPLVnVXuaAASQJFy4ZbQJOkSAL6l6w6VqaSssqdkdZuVgq1y5wdL8xyiBOpZb4o8pMWhdMR2R1wW06dXEeCHOqOcYBkg/B38J3DjKesOlasiydnZNXdUNMVMS1rdXE5vQCGiTbjqb2F/RR7JKz6hGbENY0nVxvYGxi4nfw8qesOlagkrLcJ2R1XZnufig0F0CTJAsHZSPKYPQN0ngdldXK6o7uwyyQxrrgxpGU87Qb954J6w6VqUpKyit2TVqdNxL8U53Ny84zJ3lgbpJ0tYDfK+juyOq1tNpfjMz3AF0zlbq4EFsF2UG+mY8E9YedamizN3ZKW5GB2NcXZi5wcTECQGyziQLzYOtK4q9kxOVjTjmkNlzidTuDhFtCYGstEgSU9YdK01FmjOyZ76pa3u5racSZnNOt9DaAANCXEkwAvph+ybPUce/gxriyJN8ou6TxJPoa2JzGL6w6Vo6LNaPZaILyNoZbkAZTzbZTcTpfykjcu1PsrAYXu7vJLbMkZQ82DczRoSQJ3AElPWHStIRZlV7KixhvtAuLmhpc1osfCMDUiHECw8EL6VOyfLkZO0Jc4y6G+DrIsb+C2ekkTCekOlaVKLManZTLmsD8e0huZzi1sOPwQLGGkyfI0Dfbl/Zg3lA3lMc1rYk5QcxOo8HgBEb3SSIhPSHStNXKomzNtPq1sO+nWq8m+u6kadQtktbSeSYA3vAvJjL0q9Lvjyy5swLNH0n+yO0HUwXOaWEAxEmnTbAJ6HEwIPTIg6Ws+ZhScfjix8OJBIzwOa2nILb3IBiQQQTbeuPpp1wU3D7Hp1X4p7nPa2m59TmFwlrn2OX0iy+TMJs/fiawtpz4+gKb2QebtB3GSR/wCTwY33Gi9jKTiGNpkMazDUKrzybHnnlwc64mAACssO8q0cHs/9preTnkegRELq3CbPm+Iret8eW7dVYKeNBu3F03SJMUqduaTw4wPT0L6vqPn3y2PN0xvaJiL6nq+pgyrowmzt+Ir+p514HKuwwezvH4jTWHz9lWdubfihHHk6R49PQPWuMx/adB8SlfTp4mPQmDKsNwuzvHYj1Pn7C57h2d47EdV308y/9eRWblD+0xcfApaEkTA6BPp9K7cu63fP+WgN08eMD1pgyrjcHs4eDVr+p48v6tfVmE2dEcpiL2IDXREcOT+hWE4gg++h5clA7xeAekn0LluIk++uHwKPTunoHrTBlAOwmzzblMQdNWuNwfN7lxVwGz3RNTEGL+ATB0tNPphWEYr/ALo6fEpawLa9MSeC5bi93dR1jwKXxonXgJ9PpUwZV0bM2f4zEmNOYZ9fJ20C+g2dgJkPxOgvkM/6WinRjzlnui8aZaPxZ18tl9XbQEx3SSJ1y0gBcDjwk+hMGUA3ZmA3PxN4n2v0eKvourtmYEGxxH/rjf0UwrI3HjXuj/LR6db9A9fQh2oB+v8A8tLXm2/zG/yelXBlW2bOwIEd8xpHJn7i+h2dgog91dQx6sisTdqN8fF48GlpmcJ8kAH0hcHawieWvGmWlrlmL9NkwZV47NwdvfJ/uH7qexeD/wC6JG/Ifo5qsjtqDx4N40o6ZwJ6pLo6F1G12i5qwehtE7nGJ33AH97oTBlXhsrBzPfU6e5mfWWrt7F4QGe+b68wyfoU8/bLJjlrXM5KW7Jw45ndQ8V5sR2T0GGHYhomLllPQlwO7cA0/wB7oTBlEVMBhADAxd5Jhrhfp47l0xGyKRoUalPlOc8ZRULtRVptjJOhzEXHoVhpYs1aZMgtdRquiGCYpE7hIh0ibTlnQrzbRb3vQAsTVMHgTXox/VkV22OQ47OLg4Pbia4k6OhlUTqbxF7EwJWjrPNnuJqYEVaYY5uKq5DmzEjJVaJsIBEkTIiYK0NbfPTLltws5dTou2hjPbGsqGo1ul84bTI1MZiAACL6C8gHRlnlWpRdjMdTeXNcXAEhojSkWlz4s0kRe3OEEFT6aXgg9lvlm0Dxv5CXNJHouF7XZofl17ioX6MtQEC43E7ibab14dnO9qx59fCZEx0TMKSpSHPi0YTDAxwgzuP8N99xzjqvP2EdhNDF0X1qjqrHcq5mWmWBsBrDMFhvLj/JWcdrjC+MxHWZ9xd+1kO9Heef9imrctpPxxb+qeO11hfGYjrM+4ufydYXxmI6zPuK3oriJmqee13hfGYjrM/40/J1hfGYjrs/41cETBmqf+TvC+MxHXZ9xPyd4XxmI67PuK4ImDNVD8neF8ZiOuz7ifk7wvjMR12fcVvRMQyp/wCTrC+MxHXp/wDGuv5OML43Eden/wAauSJgyp47XWE+PX67PuLn8neF8ZX67PuK3omIZU/8nWE8ZX67PuLg9rjCfHr9dn3FcUTBlTvycYT4+I67PuJ+TjCfHr9dn3FcUTBlTfyb4T4+I67PuKsdm/YNh8LTp1qTqrnuqimc7muaAWPdIAaDMtG/itZVR7Zg72pefb/p1FLPwlRmz6WWhSBue56437hUHH0L4bS970D86NPPUdOmV7aY9rp+YxA3bm1R/XkXg2oZw1DzoB8nLUp8iwrWPthqlRtbAtqNa4HFVSxzQRlGR+Vt51AMwQQRpdaEqLgw9rsIC5z2nFP1a0ZTleAJG4AxcXkGdQr0tfnpxz2LPauJYMbi21aT71AA++XSllI8hgEA77iFoSzqu97MZi3Op56bqrWDQgkuYG2jwwYiY3wSU+mjgh9lDvTaJOoeJ6TYE+u6lMKRylYnQYOgDu1YeBG8jj5N4h9le8toX+E0TxghSVQA1KgOncuG1jUUg4agzcDhePIc46qy9rQd6O88/wCwxWxVPtae83eef9liti3mmd2IiKoIiICIiAiIgIiICIiAiIgIiICqfbK97U/Pt/06itiqnbI97U/Pt+xUUulm0bSb7XS19xxGs/EqHfb1KO2tHc1CdOVuOjlWTPoUlTdzaWnuNfSN9N2t/wCSi9pP71w5j9bPqqNP8F561j34HDFr8K5rnlpxb5DnTlJzXAOgEwItBuLBX9Z/s2hSD6DqLmz3YeUDXSJOYkkcZPAEEESRZaCtfnpxz26qgRiW4vFuZlcw1cpGrg17qYM72xEh1280gxMjQFntSlXFfGPo1JaK/OZIAALmB5M2IiSYh0tGu99dHBXtmDvHHndnYLaRIA9EQvfiaM1aljahQMgOgRhy4SRZozQJNtALkLxbN/R2NduNRh4b2x9akcSQH1w+JNGgBOXXue0Teb/Bvc7pWcdVZ+1r7zPnn/ZYrWqr2t/eZ88/6mq1LeaZ3YiIqgiIgIiICIiAiIgIiICIiAiIgKqdsj3tT8837FRWtVPtknvan59v2Kil0s2jGOJFIfNV95MTSdG4AeS6jdpHvWgYn213ph4t9Ckac+08OSrcPEu/rcvBtM954fz7/J4RN/UvPWr1YGpRdWw4ZAqMxbs0Ag+E4OmYJBO+4JAPStEWe4SuHPwzXMc1zcYSHOaAHZTls7eYmNDl6FoS1+WnHPbqs2xOCzYnFPp1sr21ySwnVgqMFQwLmxPNIgkggiLaSs0x2DoPr4hwqOZWGJJy65slRuYNnRxAcLWguBB3z66OG0Ts39GY2x90brwzM+lSWIrZX4nMDBp4dtg7XkG5ZjTnRrbymFG7Od+a8YeNUfabZSVURVxNrCnTEkC3eg4mZInQTroJKzjpae1wO8z51/1NVpVW7W7pwX+K/wD2q0r0TTO7ERFUEREBERAREQEREBERAREQEREBVDtnHvWn59v2Kit6p/bRPelPz7PsVFLpZtGUNaEH4FXhqaJ4AdGpKjcaZwOH48u/0XeQpLDm2G18Crx8TukqMxh7xw+o9vf9b1561S+HxEuwzXsIIxQyON9H6AjQZbwbC4mVflQKdQh2FDmjKcUIIM87PYuG45QNCbnQBX9afLTPntws1xrcM+viQ6WVe6ZBBgOLKrYY4/KjgDBgE6LSlme1MbQ5esytS53dJ5OppDhVGQaSWkgbyCYsE+ul4bRGzR+acT50fWxSOLcW1MXvORrfQcMydxP0jy6Axezj+acTbSqL+ln9elSePcQ/GeEbNFpt3s0XggDjcHTTeM47q0drD3m7z1T6mK2qodq104Jx+eqfUxW9eiaZXYiIqgiIgIiICIiAiIgIiICIiAiIgKn9tD3pT8+37FRXBU/toe9Kfn2/YqKXSzaJoEd7C08m/hMGiY0vx14FRmO94UPOv48aikaDzGFF7MffnReieIA9RKi8cO8KE6cq/X++vPWqZwNV7XUQcrmOxVPQEFpNSWlx03RoNxkmy0JZ7h6FRrsM4OzMOKYCIaIBfaDYkTHGw9K0FafLTjnsWc7R2s6nVrMqUszTiHhr8uaHvqAUy03EybxeDpZaMs62hjcSypWa2kX0nYh7XEXjNVlpt4IE6n5UGYCfXRwV7Z5/NFfz/wDFikNpmH4smNcsW34XyfJHDy7jG4F35pq9Nc/QWKX2nM47XUaZo9774tw8K09MRnHdWTtW+8T56p9TVb1Ue1d7x/xan+1W5eiaZUREVQREQEREBERAREQEREBERAREQFUO2cO9Geeb9ioreql2zB3qzzzfsVFLpZtXwQO57DwHE6SQaTh8YncdQBwm6j8ae8MP5x8+t+9e/PBw28Bhm+/knkgiABaN5OmllH4xv5vw3DlHf71561TFLD5XYR4qOBdiqYNMulpHKC4buI1Ol51WirNRhqIq4So0jlTiKebLG94BD43jpndpqtKWny0457cLNtpNxbKtV1MB1F1eoHgv+AavOdlJtERadNBMrSVl21cLUNZ76VUQMQ/O245prEPaSAQTYECx8Hhd9dHBD4H9EPg27oOkcWKW2q45scLXfviR3vaJPl0BMcBKicF+iH//AGXajdmplTG0ahD8dG+oQSCfEGxgGRpqQJjUwFnHdWftYtjAjzlT+Ctiq3a295DzlT+CtK9E0yoiIqgiIgIiICIiAiIgIvjisU2mAXTBMWEry+zNHieqUEgij/ZqjxPVKezNHieqUEgij/ZmjxPVKezNHieqUEgql2y/etPz7fsVFO+zNHieqVWe2Bj2VcMxrCZFVpuI+C/+al0s2huUDXYcnMYYTedORfES6I10AHlMxH4v3hhT848R/ed9Fl6HVm56B0hhBIiT7U8bhO8an0Aa+bE1e8cMwatqOcfWf5rCz9aZSzm0hUwQBip3TTMSQSM4zRPhR0dM6QtKWaVMZRc/CBzSHU67H5jbSoNNZBG43tZXv2Zo8T1StPnpxy29yzLaeCBquqMrOa5uJqF1MgkFvdBzAcBckTIknQhaasy2lhqD6pIqVGVW4mq5seA4truztaOkAgxpJkGU+ml4IPCM/NLjuFd8+UvpR5d4U1tIc7HGP1h3Ej3F3SADbUzqQNSVE4V35pPTiH+vPS/FSu1gJxpmDyxjwSTFF0gSCd26Ok7jk6WntbHvEecqfWFaVVe1p7xHnKn1hWpeiaZ0REVQREQEREBERAREQRXZH7m3/wAv9pXgc+g0iBMFptJ0deZ6FJ7coOexoaCTmm3kKjnYN3iDrxi3CxQfF1SmRMCQGgQI3mTE8I9a+TX05uLT/E9PCF6+4j4h3WP81y7BuP6h2nH8UHlJpgC06cV8HETbS/1KRfgjeKLhaxnf0jMvL7G1vFn6EHbCGllOeJkRZx3jh5OjVRHZTXY1gysY4Z22IdAOQzFwdVK+x1bxbvoUJ2XYV7KLS9paOUAvxyuUqxDVjJp2PgnjF2u0Bt6vXw+VYd7Uj8o/xX1rtvStBNMmejI+NDpZ3BfOu09y0XRzS50HcehZunrq1L0QWn3VkHUHnj1aqxqBr0agOHDmHK6qwNO6S+AD09NlafY2t4s/QuuCVaFme1zh3VCHtLavdLixzXZczqdc8143gw2xFxobrTAsu27jaPKCnVp08zsS8scQcwcK5ymRvMA6wbWkQefrpeCLwp/NMb+6Hn0Z6QPkuQpPbQPfnn3TBfHuL/i83h4XTAmCIfC/ov8A/RU+ipR14H+Sl9ta4y1uWdBgGDyLh8JwInneCCbcJniOlq7WJ7wb5yp9pWtVPtYfo9vnKv2lbFvNM6IiKoIiICIiAiIgIiICIiAiIgIiICqXbL96s8837FRW1VTtk+9afnm/YqKXSzarYtpz4bQzSiJ+aqTYti/pPogDz4oj2Owo4uf/AB+m69OMPPwk+KcQL+Jq7509AGupleXFk+x2Ej4z77tTHpuvPWkT+M5UHBwQaZr0tAMzfboiQPB09OpFgr+s/wBp4Z7X4OoHc3l6IyndmrAHKTpusPVcrQFp8tOOToFlu28e9lQMewupvxDmyaQc1rjXdyZD+N/KI3hamFmG2K2IpultN76bqz2vLYcAw1zBABkZSSSTbW94T6aXgg8M381E8MS8eWalH+SnNp640DQ1nA3Pi3fJNvKR6TCgMNPsSNI7oeY3n2yiAR6D9Km9sy3u0iTFdxIBI/VuN4I3gbj9a4jpbO1syMC0fOVftK0LOuwzsroYfCtp1hUD8z3c1uYQ50i8qePZ3hPnep+K2lmGeKs6KsDs7wnzvU/Fdh2cYT53qfir2hirKirY7N8Lwq9T8Vz/AG2wvznU/FO0MVY0VcHZphfnOp+K5b2aYU+M6n4p2hirEir39ssL851PxT+2WF+c6n4p2hirCirp7M8L851PxXP9s8L851PxTMMVYUVcHZrhPnOp+K7N7M8Kd9TqfinaHWrCir7ezHCne/q/iu/9rcN8vq/ip2h1qdRV89mOF+c6n4rqezPC/OdT8Ve0OtWJVPtlHvVnnm/YqL1nszwnGp1Cq/2a7cpYqg2nRzFwqNeZEWDXj0mSLKWzCyVEYl45XCxHuTiZyge4VdbToN5J00ET8Kzx7HYQcHuH0/iFxXJLsKdDyD7XtFLEjUno3COmZjrVbOzsNx5QibrCu4ndq0wKuCdTf4WIph7Bds8sCSR8F4JEnXS9loyzHadJhrYN2bnjFUh0gctIBGsa306Vp5Wnz0557dFlu3RWa4cllc0VnueMwByvrQYzWlsGQLm1pMrUgsi7Iqbj7ZRqMBbXqZ2EGXDlrjMLk6logDW9oV+mk4o7DfotsGxxNT0+2USPqVixXKCtWIoMr06lUvE1aQBEZRIc7gXajf0Kp7C25Sp4cUcRh6tRvKVKgEloOYtIkSCYy/T0L1nbGzd+z39Z33lk0wn21XzI2fQ8gfh+n5Vrkehsb5XLqrzrs+j/AOzDzuGuboPpPoUC3a+zP3fUj/yP81ydrbL37Pf1j/EpkwnBUfM+x1HyZ6Eak7n9IHkHTY99XKQNn0pixL6HxYmz+Mn1cLw3spsv931PWf5rkbV2Uf8A4D/WpkwlxVq/sFLUG1SjEZpI90+Lb0k8I7PdWIEYCmI159EzzXfO/GIOujY4zEt2rsu/eDvXK7Daeyf2B1tbq5MJYvqyO8KcRoX0L3b87rAPWJ4BdxVqj/p1PX41AcT462oHkHTKhxtLZWvcDvLeJ9S+lTHbKgE7PdfQyfoTJh7+6qwEHAUrb8+H4AX9t11Pp6Efjah/6fR3fDw4nnAn9dwt6fVCPx2zP2A+mR9a47t2WLHAOHQZB+kplMJ/uyoY/N9Ef4mGjQ/O9P1ek7FOJ/R9GOHKYbfHzvR9JUC3GbLmPY908JM8NF2pY7ZjtMBPkJP8UyYTvLv/AHfQ4nn4XiTA9u00HkCCvUE94UL8X4W3NA8dGoJ9PQoUYrZZ0wExrc2+ld24rZn7vH9aJkwmBi6v7Bhdfj4Yb5j3bhAnynyfI4zEEQMFhZjXPh7nKQbcta99dwCjhiNm/u9t7D+pXfujZ37tbB0Nr/SmTD3d2VpnuLCxNwX4Y2zN38trAI8plcjG1BrgsHMb3YYcb+6no9Sj34jZw12a30x9UrzurYCf0c3yaf7kyYSxx1SIGEwYtrymG4t3cprY9ZO76kycFguj2zD/ACt4qdLer6VEd1bP/dzSf6+UhxGz/wB2t0/r4WiZMPVVa+tVa+o2hSFNjxzKlK+am9osxxJMungBoBdees783YU28N1t+7+vSvi3F4DUbNbH9fKX3xuLbXYynSoOpta4uIkOsYneSPImVkSW13s5fAi+fuqmb7hyrbN6D0HyhamVl23HU+WwTSAHd1UHA3uTWaIkaHfB9ErUFp8tOOe3RZdisCRVNQ4TE1DSqVyxnJP5Mue+c8tEkE3i4uXQrhTOI3ir/m4H+ML7A1eFb/NHR0wu+XHs5lwpzKtcZqjsHWc9+UQaFXIwCbhl7nUjm7heMx7udXZ4GCe97zJc+lVOTmgZW2gC0cJJdEWVuJqwbV5gx4Wsb1NN0C48o67s5purU8tNuDqOmc1V1KtmEk6TeBMgZpAbEyQVzVfWMUm4OqGZYdV5Orypt4QcPhW14uE2kHRkTyh2Z46tVecvcNRjGkHm0qgLy2Ja4gXaZjSIDuIjszFVXnnYCo1jDZgp1IeIIhxy3bPOiPi9M6CieUOzOm4yu53Kv2fUygOikKdW5mQ480y4QADA1PALvSx1cTUfs57iQA2mGVA1kTcczUk3NrNHStCXCeUOyg921mEuGBqPc6NadSGc0SAMtmyJ6TbgVyzHV2aYF5c4kl3J1CAPiglmgkAG9pIA0V+XCeUO6gs2hWbFNuAqSQc9V1KrJJBExlndxmGgWkFdau0MR7kzZz2tymahY4knUkDIBPru6fgmdAhcwnlDszx2OrOMexj2U2EEANqS+NWwGAZTOhBENPEFvbD7Srvh1TZ1RrWuJyNY857QM0s0Bl2gPgRo6dBhE8odlDbtbEEio7ZtSBm5ga+fkm7PCAtu1duhcHaeKHth2fUL4DQzk3FoM3dmsWyTJEGzRoSVfkhXyh2UL2XxLQT7G1HucRBh8sbAkRk1sTExmPBdK22cU2GjZtRxcSXO9sEC8NDgwkRIGbWASBNloEJCecTszurtXFZRSbs+sBlOapFTMSRZwIbY6uNzo0TcldcRtfFOOVuzazGNA3VQXERN2tEyLcJLiQYAOjQkJ5xezOXbdxjiT7F1QGxDQ2oAYNwTkuCeiwbYc63GG25i3HO/ZlZsXFMNqxEWtlyzeZImT8kTpEInnE7M2btnHBjnnZ1Q1D4IDamVl9zS09AkAaEnVfVm2cY2nbAVTUdq4sqEAxeGkWveAQNBFloiJ5w7MzxoxFarhgcFVAZiKFQuLHENiqwuJc4SMsm86Am27TVwi648cJbkK4RF0giIgIiICIiAiIgIiICIiAFyiICIiAiIgIiICIiAiIgIiIP/2Q==" alt="">
        </div>
        <div class="col-md-4">
            <img class="w-100"
                src="https://play-lh.googleusercontent.com/IeNJWoKYx1waOhfWF6TiuSiWBLfqLb18lmZYXSgsH1fvb8v1IYiZr5aYWe0Gxu-pVZX3"
                alt="">
        </div>

    </div>

    <div class="row">

        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        </div>

    </div>

</div>
@endsection