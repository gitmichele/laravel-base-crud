<form method="POST" action="{{ route('store') }}">

    @csrf
    @method('POST')

    <div class="form-container">
        <div class="fields-container">
            <label for="name">Name</label>
            <input type="text" name="name">
        
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname">
        
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" name="date_of_birth">
        
            <label for="document_type">Document type</label>
            <input type="text" name="document_type">
            
            <label for="document_number">Document number</label>
            <input type="text" name="document_number">
        </div>
    
        <button type="submit">
            Add Guest
        </button>
    
    </div>
</form>