
@if (isset($venues) && count($venues)>0) 
    @foreach ( $venues as  $venue)
    <tr>
        <td>
            <div class="form-check d-flex align-items-center p-0 m-0">
                <input class="form-check-input p-0 m-0" type="checkbox" name="venue[]" value="{{ $venue->id }}" id="flexCheckDefault">
            </div>
        </td>
        <td class = "text-start">
            <span class = "avail-text-lg text-color">{{ $venue->title }}</span>
        </td>
        <td>
            <div class = "d-flex flex-column">
                <span class = "text-green avail-text">Available</span>
                <span class = "text-color avail-text mt-2">On 25,26 & 27th Jan</span>
            </div>
        </td>
        <td>
            <div class = "status-pills status-pills-green">
                <div class = "pills-dot"></div>
                <span class = "pills-text">Available</span>
            </div>
        </td>
        <td>
            <span class = "avail-text-lg text-color">Rs. {{ $venue->price }} per day</span>
        </td>
        <td>
            <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
        </td>
    </tr>
    @endforeach
   
@endif
    


{{-- <tr>
    <td>
        <div class="form-check d-flex align-items-center p-0 m-0">
            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
        </div>
    </td>
    <td class = "text-start">
        <span class = "avail-text-lg text-color">Large Ground</span>
    </td>
    <td>
        <div class = "d-flex flex-column">
            <span class = "text-red avail-text">Not Available</span>
            <span class = "text-color avail-text mt-2">Before 30 Jan</span>
        </div>
    </td>
    <td>
        <div class = "status-pills status-pills-red">
            <div class = "pills-dot"></div>
            <span class = "pills-text">Booked</span>
        </div>
    </td>
    <td>
        <span class = "avail-text-lg text-color">Rs. 75,000 per day</span>
    </td>
    <td>
        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
    </td>
</tr>


<tr>
    <td>
        <div class="form-check d-flex align-items-center p-0 m-0">
            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
        </div>
    </td>
    <td class = "text-start">
        <span class = "avail-text-lg text-color">Garden</span>
    </td>
    <td>
        <div class = "d-flex flex-column">
            <span class = "text-green avail-text">Available</span>
            <span class = "text-color avail-text mt-2">On 25,26 & 27th Jan</span>
        </div>
    </td>
    <td>
        <div class = "status-pills status-pills-green">
            <div class = "pills-dot"></div>
            <span class = "pills-text">Available</span>
        </div>
    </td>
    <td>
        <span class = "avail-text-lg text-color">Rs. 75,000 per day</span>
    </td>
    <td>
        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
    </td>
</tr>

<tr>
    <td>
        <div class="form-check d-flex align-items-center p-0 m-0">
            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
        </div>
    </td>
    <td class = "text-start">
        <span class = "avail-text-lg text-color">Ground adjacent to Main gate</span>
    </td>
    <td>
        <div class = "d-flex flex-column">
            <span class = "text-green avail-text">Available</span>
            <span class = "text-color avail-text mt-2">On 25,26 & 27th Jan</span>
        </div>
    </td>
    <td>
        <div class = "status-pills status-pills-green">
            <div class = "pills-dot"></div>
            <span class = "pills-text">Available</span>
        </div>
    </td>
    <td>
        <span class = "avail-text-lg text-color">Rs. 30,000 per day</span>
    </td>
    <td>
        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
    </td>
</tr>

<tr>
    <td>
        <div class="form-check d-flex align-items-center p-0 m-0">
            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
        </div>
    </td>
    <td class = "text-start">
        <span class = "avail-text-lg text-color">Ground behind exibition hall</span>
    </td>
    <td>
        <div class = "d-flex flex-column">
            <span class = "text-red avail-text">Not Available</span>
            <span class = "text-color avail-text mt-2">Before 30 Jan</span>
        </div>
    </td>
    <td>
        <div class = "status-pills status-pills-red">
            <div class = "pills-dot"></div>
            <span class = "pills-text">Booked</span>
        </div>
    </td>
    <td>
        <span class = "avail-text-lg text-color">Rs. 12,500 per day</span>
    </td>
    <td>
        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
    </td>
</tr>

<tr>
    <td>
        <div class="form-check d-flex align-items-center p-0 m-0">
            <input class="form-check-input p-0 m-0" type="checkbox" value="" id="flexCheckDefault">
        </div>
    </td>
    <td class = "text-start">
        <span class = "avail-text-lg text-color">Ticket counter</span>
    </td>
    <td>
        <div class = "d-flex flex-column">
            <span class = "text-green avail-text">Available</span>
            <span class = "text-color avail-text mt-2">On 25,26 & 27th Jan</span>
        </div>
    </td>
    <td>
        <div class = "status-pills status-pills-green">
            <div class = "pills-dot"></div>
            <span class = "pills-text">Available</span>
        </div>
    </td>
    <td>
        <span class = "avail-text-lg text-color">Rs. 5,000 per day</span>
    </td>
    <td>
        <a href = "#" class = "btn btn-primary px-3"><span class = "btn-text">Details</span></a>
    </td>
</tr> --}}