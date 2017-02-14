//
//  ViewController.m
//  Meus Dados
//
//  Created by Usuário Convidado on 13/02/17.
//  Copyright © 2017 Joel Silva. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    
    meuLabel1.text = @"Meu nome é ...";
    meuLabel2.text = @"Minha cidade é...";
    meuLabel3.text = @"Minha idade é...";
    
}


- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}


- (IBAction)btnExibir:(id)sender {
    meuLabel1.text = @"Joel Silva";
    meuLabel2.text = @"São Caetano";
    meuLabel3.text = @"22 anos";
}

- (IBAction)btnLimpar:(id)sender {
    meuLabel1.text = @"Meu nome é ...";
    meuLabel2.text = @"Minha cidade é...";
    meuLabel3.text = @"Minha idade é...";
}
@end
