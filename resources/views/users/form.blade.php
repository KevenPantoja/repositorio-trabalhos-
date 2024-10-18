<div class="container mt-5">
    <h2 class="mb-4">Cadastro de Usuário</h2>

    <form>
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $user->nome ?? '') }}" required>
                @error('nome')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone', $user->telefone ?? '') }}" required>
                @error('telefone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento', $user->data_nascimento ?? '') }}" required>
                @error('data_nascimento')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="cidade" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade', $user->cidade ?? '') }}" required>
                @error('cidade')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="estado" class="form-label">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado', $user->estado ?? '') }}" required>
                @error('estado')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="cep" class="form-label">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" value="{{ old('cep', $user->cep ?? '') }}" required>
                @error('cep')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="estado_civil" class="form-label">Estado Civil:</label>
                <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="{{ old('estado_civil', $user->estado_civil ?? '') }}" required>
                @error('estado_civil')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
</div>
