import React, { useState } from 'react';

import './App.css';

function App() {
  const [selectedOption, setSelectedOption] = useState('');
  const [checked, setChecked] = useState(false);
  return (
   <div>

     {/* botao radio */}
      <div>
       <input  type="radio" className='radio'  placeholder='Nome do usuario' checked={selectedOption === 'opcao1'} onChange={(e) => setSelectedOption(e.target.value)} />
        <label className='texto'>Masculino</label>
        <input type="radio" className='radio' value="opcao2" checked={selectedOption === 'opcao2'} onChange={(e) => setSelectedOption(e.target.value)} />
        <label>Feminino</label>
      </div>

      
      {/* lista suspensa */}
      <div>
        <select>
          <option>Primeiro</option>
          <option>segundo</option>
        </select>
      </div>
   </div>
  );
}

export default App;
