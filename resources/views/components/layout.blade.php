<div>
    <header>
        <div class="background">
            <div class="Text">
                <h1>{{ $title }}</h1>
            </div>
        </div>
    </header>
</div>

<style>
    .background{
        padding: 150px 0px;
        background-color: #286550;
    }

    .Text h1{
        color: white;
        text-align: center;
    }

    @media screen and (max-width: 600px){
        .background{
            padding: 100px 0px;
        }
    }
</style>