<div style="display: flex; flex-direction: column; align-items: center; padding-top: 50px; background-color: #f0f2f5; height: 100vh;">
    <h1 style="color: #4a90e2; font-size: 2rem; margin-bottom: 20px;">Livewire Dependent Dropdown</h1>

    <div style="margin-bottom: 15px; text-align: left; width: 300px;">
        <label for="country" style="font-weight: bold; margin-bottom: 5px; display: block;">Country</label>
        <div>
            <select wire:model.live="selectedCountry" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                <option value="" selected>Choose Country</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div style="margin-bottom: 15px; text-align: left; width: 300px;">
        <label for="state" style="font-weight: bold; margin-bottom: 5px; display: block;">State</label>
        <div>
            <select wire:model.live="selectedState" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                <option value="" selected>Choose State</option>
                @if($states)
                    @foreach($states as $state)
                        <option value="{{ $state->name }}">{{ $state->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <p style="margin-top: 10px; font-weight: bold;">{{ $this->selectedState }}</p>
    </div>
</div>

