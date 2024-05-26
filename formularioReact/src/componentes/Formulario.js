import './Formulario.css';

function Formulario(){
    return(
        <section className='formulario'>
            <form>
                <div className='campo-texto'>
                    <label>
                        Nome
                    </label>
                    <input type="text" name="nome" placeholder="Seu Nome" />
                </div>
                <div className='campo-texto'>
                    <label>
                        Endereço
                    </label>
                    <input type="text" name="endereco" placeholder="Endereço, 00" />
                </div>
                <div className='campo-texto'>
                    <label>
                        Telefone
                    </label>
                    <input type="text" name="telefone" placeholder="(00)99999-9999" />
                </div>
                <div className='campo-texto'>
                    <label>
                        E-mail
                    </label>
                    <input type="email" name="email" placeholder="seuemail@email.com" />
                </div>
                <input type="submit" className='botao'>Salvar</input>
            </form>
        </section>
    );
}

export default Formulario;