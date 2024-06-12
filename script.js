$(document).ready(function() {
    $('#add-work-experience').click(function() {
        $('#work-experiences').append(`
            <div class="work-experience">
                <label for="job_title">Título do Cargo:</label>
                <input type="text" name="job_title[]" required>
                
                <label for="employer">Empresa:</label>
                <input type="text" name="employer[]" required>
                
                <label for="start_date">Data de Início:</label>
                <input type="date" name="start_date[]" required>
                
                <label for="end_date">Data de Término:</label>
                <input type="date" name="end_date[]" required>
                <button type="button" class="remove">Remover</button>
            </div>
        `);
    });

    $('#add-education').click(function() {
        $('#education-entries').append(`
            <div class="education-entry">
                <label for="school">Instituição:</label>
                <input type="text" name="school[]" required>
                
                <label for="degree">Grau Acadêmico:</label>
                <input type="text" name="degree[]" required>
                
                <label for="graduation_date">Data de Graduação:</label>
                <input type="date" name="graduation_date[]" required>
                <button type="button" class="remove">Remover</button>
            </div>
        `);
    });

    $(document).on('click', '.remove', function() {
        $(this).parent().remove();
    });
});