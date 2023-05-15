 <!-- Modal -->
 <div class="modal fade modal-default" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <p>
                     Para um orçamento mais preciso, precisamos confirmar algumas informações sobre o interessado em
                     contratar nossos serviços:
                 </p>
                 <form action="" id="creation-form-new-home" class="form-criar aos-init aos-animate" data-aos="zoom-in"
                     method="post" novalidate="novalidate" data-hs-cf-boun="true">
                     <div class="form-casado">
                         <p>Você é casado?</p>
                         <input type="radio" name="casado" id="married" />
                         <input type="radio" name="casado" id="not-married" />
                         <div class="switch">
                             <label for="married">Sim</label>
                             <label for="not-married">Não</label>
                             <span></span>
                         </div>
                     </div>
                     <div class="form-nome">
                         <p>Precisa mudar ou incluir nome?</p>
                         <input type="radio" name="rdo" id="yes" />
                         <input type="radio" name="rdo" id="no" />
                         <div class="switch">
                             <label for="yes">Mudar</label>
                             <label for="no">Incluir</label>
                             <span></span>
                         </div>
                     </div>
                     <div class="form-group">
                         <div>
                             <div class="grecaptcha-badge" data-style="bottomright"
                                 style="width:256px; height: 60px; position: fixed; visibility: hidden; display:block ; transition: right 0.3s ease 0s; bottom:14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                 <div class="grecaptcha-logo"></div>
                                 <div class="grecaptcha-error"></div>
                                 <textarea name="" id="" cols="30" rows="10"></textarea>
                             </div>
                         </div>
                         <button id="input-form-modal_no_check" type="submit" class="btn g-recaptcha btn-captcha"
                             data-sitekey="6LfheeYUAAAAAI0qgRFQjLgyj3HmMp1TXLNK2R18"
                             data-callback="onSubmitModalNoCheck" style="width:75%">Enviar</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- modal end -->


 <div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered mw-650px">
         <div class="modal-content">
             <div class="modal-header">
                 <h2 class="fw-bolder">Atualizar senha</h2>
                 <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                     &#x2715;
                 </div>
             </div>

             <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                 <form id="kt_modal_update_password_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                     action="#">
                     <div class="fv-row mb-10 fv-plugins-icon-container">
                         <label class="required form-label fs-6 mb-2">Senha Atual</label>
                         <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                             name="current_password" autocomplete="off">
                         <div class="fv-plugins-message-container invalid-feedback"></div>
                     </div>

                     <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                         <div class="mb-1">
                             <label class="form-label fw-bold fs-6 mb-2">Nova senha</label>
                             <div class="position-relative mb-3">
                                 <input class="form-control form-control-lg form-control-solid" type="password"
                                     placeholder="" name="password" autocomplete="off">
                                 <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                     data-kt-password-meter-control="visibility">
                                     <i class="bi bi-eye-slash fs-2"></i>
                                     <i class="bi bi-eye fs-2 d-none"></i>
                                 </span>
                             </div>

                             <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                 <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                 <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                 <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                 <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                             </div>
                         </div>

                         <div class="text-muted">Use 8 ou mais caracteres com uma mistura de letras, números e &amp;
                             símbolos.</div>
                         <div class="fv-plugins-message-container invalid-feedback"></div>
                     </div>

                     <div class="fv-row mb-10 fv-plugins-icon-container">
                         <label class="form-label fw-bold fs-6 mb-2">Confirme a nova senha</label>
                         <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                             name="confirm_password" autocomplete="off">
                         <div class="fv-plugins-message-container invalid-feedback"></div>
                     </div>

                     <div class="text-center pt-15">
                         <button type="reset" class="btn btn-light me-3"
                             data-kt-users-modal-action="cancel">Cancelar</button>
                         <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                             <span class="indicator-label">Enviar</span>
                             <span class="indicator-progress">Por favor aguarde...
                                 <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                         </button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>