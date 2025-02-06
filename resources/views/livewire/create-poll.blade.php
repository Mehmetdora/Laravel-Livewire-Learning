<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}





    {{-- model.lazy="value" ile girilen değer tab ile gönderilir --}}
    {{-- model.live="value" ile girilen değer değiştiğinde anında serverdaki değişkene gönderilir --}}
    {{-- model.click.prevent="ekle" ile bir butona tıklandığında bir fonk çalıştırmaya yarar --}}
    {{-- model.click.prevent="sil($element)" ile fonksiyona parametre verilebilir --}}


    <form wire:submit.prevent="savePoll">

        <h4>Poll Title</h4>
        <input required type="text" wire:model.live="title" placeholder="Poll Title...">



        <br>
        <h5>Options</h5>
        <button wire:click.prevent="addText">Ekle</button>

        <hr>

        @foreach ($options as $index => $option)
            <label for="">{{ $index + 1 }}</label>
            <input required type="text" wire:model.live="options.{{ $index }}">
            <button wire:click.prevent="deleteText({{ $index }})">Sil</button>
            <br>
        @endforeach

        <hr>
        <button type="submit" class="btn">Kaydet</button>
    </form>






</div>
