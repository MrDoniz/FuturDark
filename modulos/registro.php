	<?php 
		require('php/registro.php');
		?>
<style>

:root {
  /* generic */
  --gutterSm: 0.4rem;
  --gutterMd: 0.8rem;
  --gutterLg: 1.6rem;
  --gutterXl: 2.4rem;
  --gutterXx: 7.2rem;
  --colorPrimary400: #970000;
  --colorPrimary600: #970000;
  --colorPrimary800: #970000;
  --fontFamily: "Dosis", sans-serif;
  --fontSizeSm: 1.2rem;
  --fontSizeMd: 1.6rem;
  --fontSizeLg: 2.1rem;
  --fontSizeXl: 2.8rem;
  --fontSizeXx: 3.6rem;
  --lineHeightSm: 1.1;
  --lineHeightMd: 1.8;
  --transitionDuration: 300ms;
  --transitionTF: cubic-bezier(0.645, 0.045, 0.355, 1);
  
  /* floated labels */
  --inputPaddingV: var(--gutterMd);
  --inputPaddingH: var(--gutterLg);
  --inputFontSize: var(--fontSizeLg);
  --inputLineHeight: var(--lineHeightMd);
  --labelScaleFactor: 0.8;
  --labelDefaultPosY: 50%;
  --labelTransformedPosY: calc(
    (var(--labelDefaultPosY)) - 
    (var(--inputPaddingV) * var(--labelScaleFactor)) - 
    (var(--inputFontSize) * var(--inputLineHeight))
  );
  --inputTransitionDuration: var(--transitionDuration);
  --inputTransitionTF: var(--transitionTF);
}



.Input {
  position: relative;
}

.Input-text {
  display: block;
  margin: 0;
  padding: var(--inputPaddingV) var(--inputPaddingH);
  color: inherit;
  width: 45%;
  font-family: inherit;
  font-size: 17px;
  margin-bottom:11px;
  font-weight: inherit;
  line-height: var(--inputLineHeight);
  border: none;
  border-radius: 0.4rem;
  transition: box-shadow var(--transitionDuration);
}

.Input-text::placeholder {
  color: #B0BEC5;
}

.Input-text:focus {
  outline: none;
  box-shadow: 0.2rem 0.8rem 1.6rem var(--colorPrimary600);
}

.Input-label {
  display: block;
  position: absolute;
  bottom: 50%;
  left: 1rem;
  color: #fff;
  font-family: inherit;
  font-size: var(--inputFontSize);
  font-weight: inherit;
  line-height: var(--inputLineHeight);
  opacity: 0;
  transform: 
    translate3d(0, var(--labelDefaultPosY), 0)
    scale(1);
  transform-origin: 0 0;
  transition:
    opacity var(--inputTransitionDuration) var(--inputTransitionTF),
    transform var(--inputTransitionDuration) var(--inputTransitionTF),
    visibility 0ms var(--inputTransitionDuration) var(--inputTransitionTF),
    z-index 0ms var(--inputTransitionDuration) var(--inputTransitionTF);
}

.Input-text:placeholder-shown + .Input-label {
  visibility: hidden;
  z-index: -1;
}

.Input-text:not(:placeholder-shown) + .Input-label,
.Input-text:focus:not(:placeholder-shown) + .Input-label {
  visibility: visible;
  z-index: 1;
  opacity: 1;
  transform:
    translate3d(0, var(--labelTransformedPosY), 0)
    scale(var(--labelScaleFactor));
  transition:
    transform var(--inputTransitionDuration),
    visibility 0ms,
    z-index 0ms;
}
</style>
					<div style="margin-right: 30px;right: 0%;position: absolute;"><?php if(isset($error)){foreach($error as $error){echo '<p class="error-registro">'.$error.'</p>';}}?></div>
						<form role="form" method="post" action="" autocomplete="off"> 
								<input style="color:black;"type="email" id="input" class="Input-text" placeholder="Introduce Email"	 name="email">
								<input style="color:black;"type="text" id="input" class="Input-text" placeholder="Nombre de Usuario" name="username">
								<input style="color:black;"type="password" id="input" class="Input-text" placeholder="Contraseña"		   name="password">
								<input style="color:black;"type="password" id="input" class="Input-text" placeholder="Confirme Contraseña" name="passwordConfirm">
								<div style="width:25%;margin-left:auto;"><input type="submit" name="submit" value="Enviar" class="cont-iz-boton"></div>
						</form>
	
					<p style="width:15%;margin-left:auto;"><button class="cont-iz-boton">Acceder</button></p>

										
		