import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ButtonComponent } from '../../components/shared/button/button.component';
import { NavbarComponent } from '../../components/shared/navbar/navbar.component';
import { HeaderComponent } from '../../components/shared/header/header.component';
import { FooterComponent } from '../../components/shared/footer/footer.component';



@NgModule({
  declarations: [
    ButtonComponent,
    NavbarComponent,
    HeaderComponent,
    FooterComponent
  ],
  imports: [
    CommonModule
  ],
  exports: [
    ButtonComponent,
    NavbarComponent,
    HeaderComponent,
    FooterComponent
  ]
})
export class SharedModule { }
