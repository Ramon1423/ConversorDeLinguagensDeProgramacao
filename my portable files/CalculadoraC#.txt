using System;
using System.Collections.Generic;
using System.Text;
 
namespace Calculadora
{
    class Program
    {
        static void Main(string[] args)
        {
            double num1, num2;
            int resul = 0;
 
            Console.WriteLine("Digite o primeiro numero");
            num1 = double.Parse(Console.ReadLine());
            Console.WriteLine("Digite o segundo numero");
            num2 = double.Parse(Console.ReadLine());
 
            Console.Clear();
 
            while (resul != 5)
            {
                Console.WriteLine("Para somar digite 1");
                Console.WriteLine("Para subtrair digite 2");
                Console.WriteLine("Para dividir digite 3");
                Console.WriteLine("Para multiplicar digite 4");
                Console.WriteLine("Para sair digite 5");
                resul = int.Parse(Console.ReadLine());
                if (resul == 1)
                {
                    Console.WriteLine("Soma = {0}", num1+num2);
                }
                if (resul == 2)
                {
                    Console.WriteLine("Subtração = {0}", num1 - num2);
                }
                if (resul == 3)
                {
                    Console.WriteLine("Divisão = {0}", num1 / num2);
                }
                if (resul == 4)
                {
                    Console.WriteLine("Multiplicação = {0}", num1 * num2);
                }
                Console.ReadLine();
                Console.Clear();
            }
        }
    }
}