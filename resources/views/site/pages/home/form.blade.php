<form action="#" id="creation-form-new-home" class="form-criar aos-init aos-animate form_step" data-aos="zoom-in" method="post" novalidate="novalidate" data-hs-cf-boun="true" data-form-show="01">
    <span class="step_current_show">
        <div class="row">
            <div class="col-8">
                <span class="step_current_title">
                    <strong>Essenciais para a Consulta</strong>
                </span>                
            </div>
            <div class="col-4 text-right">
                <span class="step_current_where"></span>
            </div>
        </div>
    </span>
    <fieldset data-form-step="01">
        <div class="form-group">
            <label class="required" for="nome">Qual o objetivo do Solicitante?</label>
            <select class="js-input campos dica notification" data-control="select2" id="objective" name="objective" class="form-control form-control-lg form-control-solid" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                <option></option>
                <option value="mudar nome">Mudar nome</option>
                <option value="incluir sobrenome">Incluir sobrenome</option>
            </select>
        </div>
    
        <div class="form-group">
            <label class="required" for="name">Nome completo</label>
            <input type="text" name="name" value="" class="js-input campos dica notification" required />
        </div>
    
        <div class="form-group">
            <label class="required" for="name_intended">Nome pretendido</label>
            <input type="text" name="name_intended" value="" class="js-input campos dica notification" required />
        </div>
        <div class="form-group">       
            <button type="button" class="btn g-recaptcha btn-captcha step-button" data-form-step-to="02" >Avançar</button>
        </div>
    </fieldset>


    <fieldset data-form-step="02">
        <div class="fv-row mb-10">
            <div class="col-md-12 fv-row">
                <div class="row fv-row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="required">E-mail</label>
                            <input type="email" name="email" value="" class="js-input campos dica notification" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="required">Profissão</label>
                            <input type="text" name="job" value="" class="js-input campos dica notification" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="required">Gênero</label>
                            <select class="js-input campos dica notification" data-control="select2" id="gender" name="gender" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                                <option value="">Selecione</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fv-row mb-10">
            <div class="col-md-12 fv-row">
                <div class="row fv-row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="required">Telefone</label>
                            <input type="text" name="phone" value="" class="sp_celphones js-input campos dica notification" onkeyup="handlePhone(event)" required />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="required">Estado civil</label>
                            <select class="js-input campos dica notification" data-control="select2" id="marital_status" name="marital_status" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                                <option value="">Selecione</option>
                                <option value="solteiro">Solteiro(a)</option>
                                <option value="casado">Casado(a)</option>
                                <option value="divorciado">Divorciado(a)</option>
                                <option value="viuvo">Viúvo(a)</option>
                                <option value="separado">Separado(a)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-lg-3">
                <div class="form-group">       
                    <button type="button" class="btn g-recaptcha btn-captcha step-button back" data-form-step-to="01" >Voltar</button>
                </div>
            </div>
            <div class="col-8 col-lg-9">
                <div class="form-group">       
                    <button type="button" class="btn g-recaptcha btn-captcha step-button" data-form-step-to="03" >Avançar</button>
                </div>
            </div>
        </div>
        
    </fieldset>

    <fieldset data-form-step="03">
        <div class="form-group">
            <label class="required" for="have_passport">O Solicitante possui Passaporte?</label>
            <select class="js-input campos dica notification" data-control="select2" id="have_passport" name="have_passport" class="form-control form-control-lg form-control-solid" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                <option value="">Selecione</option>
                <option value="sim">Sim</option>
                <option value="não">Não</option>
            </select>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="required" for="register_uf">Estado de Registro da Certidão de Nascimento</label>
                    <select class="js-input campos dica notification" data-control="select2" id="register_uf" name="register_uf" class="form-control form-control-lg form-control-solid" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                        <option value="">Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="required" for="register_city">Cidade de Registro</label>
                    <select class="js-input campos dica notification" data-control="select2" id="register_city" name="register_city" class="form-control form-control-lg form-control-solid" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                        <option value="">Selecione</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="required" for="birth_certificate_registry">Cartório</label>
            <select class="js-input campos dica notification" data-control="select2" id="birth_certificate_registry" name="birth_certificate_registry" class="form-control form-control-lg form-control-solid" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                <option value="">Selecione</option>
            </select>
        </div>


        <div class="row">
            <div class="col-4 col-lg-3">
                <div class="form-group">       
                    <button type="button" class="btn g-recaptcha btn-captcha step-button back" data-form-step-to="02" >Voltar</button>
                </div>
            </div>
            <div class="col-8 col-lg-9">
                <div class="form-group">       
                    <button type="button" class="btn g-recaptcha btn-captcha step-button" data-form-step-to="04" >Avançar</button>
                </div>
            </div>
        </div>
    </fieldset>


    <fieldset data-form-step="04">

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="required" for="marriage_certificate_uf">Estado de Registro da Certidão de Casamento</label>
                    <select class="js-input campos dica notification" data-control="select2" id="marriage_certificate_uf" name="marriage_certificate_uf" class="form-control form-control-lg form-control-solid" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                        <option value="">Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="required" for="marriage_certificate_city">Cidade de Registro</label>
                    <select class="js-input campos dica notification" data-control="select2" id="marriage_certificate_city" name="marriage_certificate_city" class="form-control form-control-lg form-control-solid" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                        <option value="">Selecione</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="required" for="marriage_certificate_office">Cartório</label>
            <select class="js-input campos dica notification" data-control="select2" id="marriage_certificate_office" name="marriage_certificate_office" class="form-control form-control-lg form-control-solid" data-placeholder="Selecione..." data-allow-clear="true" data-hide-search="true" required>
                <option value="">Selecione</option>
            </select>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">       
                    <button type="submit" class="btn g-recaptcha btn-captcha step-button"  >Enviar</button>
                </div>
            </div>
        </div>
    </fieldset>
    
    
    

    
    
   
   
    <div id="no-check" class="form-group text-center">
        <p class="box-center">
            Quando clicar você concorda com os
            <a href="termos.html" target="_blank" rel="noreferrer">Termos de Uso</a> e
            <a href="privacidade.html" target="_blank" rel="noreferrer">Política de
                privacidade</a>
        </p>
    </div>
</form>