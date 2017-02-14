//
//  ViewController.h
//  Meus Dados
//
//  Created by Usuário Convidado on 13/02/17.
//  Copyright © 2017 Joel Silva. All rights reserved.
//

#import <UIKit/UIKit.h>




@interface ViewController : UIViewController{
    
    
    __weak IBOutlet UILabel *meuLabel1;
    
    __weak IBOutlet UILabel *meuLabel2;
    
    __weak IBOutlet UILabel *meuLabel3;
}


- (IBAction)btnExibir:(id)sender;

- (IBAction)btnLimpar:(id)sender;


@end

