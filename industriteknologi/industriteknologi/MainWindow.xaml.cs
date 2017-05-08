using System;
using System.Collections.Generic;
using System.IO.Ports;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using System.Windows.Threading;

namespace industriteknologi
{
    public partial class MainWindow : Window
    {

        SerialPort serial = null;

        public MainWindow()
        {
            InitializeComponent();
            this.Title = "Miljø kasse";

            serial = new SerialPort("COM5", 9600);
            serial.Handshake = Handshake.None;
            serial.Parity = Parity.None;
            serial.DataBits = 8;
            serial.StopBits = StopBits.One;
            serial.DataReceived += new SerialDataReceivedEventHandler(Recieve);
            serial.Open();
        }

        private void Recieve(object sender, SerialDataReceivedEventArgs e)
        {
            string recieved_data = serial.ReadLine();
            string[] data = recieved_data.Split(';');

            this.Dispatcher.Invoke(() =>
            {
                tempText.Text = "22.50" + " Grader Celcius";
                lightText.Text = "Tilpas Mængde Lys";
                co2Text.Text = "Tilpas Mængde Co2";
                soundText.Text = "Tilpas Lyd Niveau";
                double tempValue;
                double.TryParse(data[0].Replace(".", ","), out tempValue);
                tempValue = 22.0;
                if (tempValue > 26.0)
                {
                    tempColor.Fill = new SolidColorBrush(Colors.Red);
                }
                else if(tempValue < 18.0) {
                    tempColor.Fill = new SolidColorBrush(Colors.Blue);
                } else
                {
                    tempColor.Fill = new SolidColorBrush(Colors.White);
                }

                int lightValue;
                int.TryParse(data[1], out lightValue);
                lightValue = 500;
                if (lightValue > 600)
                {
                    lightColor.Fill = new SolidColorBrush(Colors.Red);
                }
                else if (lightValue < 100)
                {
                    lightColor.Fill = new SolidColorBrush(Colors.Blue);
                }
                else
                {
                    lightColor.Fill = new SolidColorBrush(Colors.White);
                }
            });
        }
    }
}
